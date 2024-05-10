<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use App\Entity\OrderProduct;

class StripePaymentController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('stripe_payment/index.html.twig', [
            'controller_name' => 'StripePaymentController',
        ]);
    }

    private function getPrice(EntityManagerInterface $entityManager) 
    {

        $dql = "SELECT SUM(c.price * c.quantity) AS balance FROM App\Entity\Cart c " .
       "WHERE c.user = ?1";

        $price = $entityManager->createQuery($dql)
              ->setParameter(1, $this->getUser()->getId())
              ->getSingleScalarResult();

        return $price;
    }


    #[Route('/stripe', name: 'app_stripe')]
    public function stripe(Request $request, EntityManagerInterface $entityManager)
    {
        $price = $this->getPrice($entityManager);

        if ($request->query->get('error')) {
            return $this->render('stripe_payment/stripe.html.twig', [
                'price' => $price,
                'error' => $request->query->get('error'),
                'successMessage' => null,
                'stripeKey' => $_ENV['STRIPE_KEY'],
            ]);  
        }

        return $this->render('stripe_payment/stripe.html.twig', [
            'price' => $price,
            'stripeKey' => $_ENV['STRIPE_KEY'],
            'successMessage' => $request->query->get('successMessage'),
            'error' => null
        ]);
    }
  
    /**
     * success response method.
     *
     */
    #[Route('/stripe_post', name: 'app_stripe_post')]
    public function stripePost(Request $request, OrderRepository $orderRepository, CartRepository $cartRepository, EntityManagerInterface $entityManager)
    {
        
        $price = $this->getPrice($entityManager);
        
        Stripe::setApiKey($_ENV['STRIPE_SECRET']);

        $token = $request->request->get('stripeToken');

        try {
            $charge = Charge::create([
                'amount' => $price * 100,
                'currency' => 'usd',
                'source' => $token, 
            ]);
        } catch (ApiErrorException $e) {
            return $this->redirectToRoute('app_stripe', ['error' => $e->getMessage()]);
        }

  
        if ($charge->paid) {

            $order = $orderRepository->findOneBy(
                ['user' => $this->getUser()->getId(), 'payment_status' => NULL],
                ['id' => 'DESC']
            );
            // var_dump($order);
            $order->setPaymentStatus('PAID');
            $order->setPaymentMethod('Stripe');
            $order->setTransactionId($charge->id);
            $order->setPaidAmount($charge->amount / 100);
            $entityManager->persist($order);
            $entityManager->flush();

            $cart = $cartRepository->findBy(['user' => $this->getUser()->getId()]);

            foreach ($cart as $item) {
                $order_product = new OrderProduct;
                $order_product->setOrderId( $order );
                $order_product->setUser( $item->getUser() );
                $order_product->setTitle( $item->getProductTitle() );
                $order_product->setProduct( $item->getProduct() );
                $order_product->setQuantity( $item->getQuantity() );
                $order_product->setPrice( $item->getPrice() );
                $order_product->setImage( $item->getImage() );
                $order_product->setStatus( 'PAID' );
                $entityManager->persist($order_product);
                $entityManager->flush();
            }

            $cart_items = $cartRepository->findBy(['user' => $this->getUser()->getId()]);

            foreach ($cart_items as $cart_item) {
                $entityManager->remove($cart_item);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_stripe', ['successMessage' => 'Payment successful!']);
        }
        else {
            return $this->redirectToRoute('app_stripe', ['error' => 'Payment failed!']);
        }

        

        

        // return $orders;
        // $res->id;

        // Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
