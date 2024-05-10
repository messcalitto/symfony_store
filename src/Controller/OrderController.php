<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\OrderRepository;
use App\Repository\OrderProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Order;


class OrderController extends AbstractController
{
    
    
    #[Route('/shipping', name: 'app_shipping')]
    public function shipping(): Response
    {
        return $this->render('order/shipping.html.twig');
    }


    #[Route('/place_order', name: 'app_place_order')]
    public function place_order(Request $request, OrderRepository  $orderRepository, EntityManagerInterface $entityManager)
    {
        
        $order = $orderRepository->findOneBy(
            ['user' => $this->getUser()->getId(), 'payment_status' => NULL],
            ['id' => 'DESC'],
            1, 0);


        if (!$order) {
            $order = new Order;
        }
        
        $order->setName( $request->request->get('name') );
        $order->setEmail( $request->request->get('email_field'));
        $order->setPhone( $request->request->get('phone'));
        $order->setAddress( $request->request->get('address'));
        $order->setCity( $request->request->get('city'));
        $order->setUser( $this->getUser() );
        $entityManager->persist($order);
        $entityManager->flush();
            
        return $this->redirectToRoute('app_stripe');
    }

  

    #[Route('/orders', name: 'app_orders')]
    public function show_my_orders(OrderProductRepository $oprep)
    {
        $orders = $oprep->findBy(['user' => $this->getUser()->getId()]);
        
        return $this->render('order/my_orders.html.twig', [
            'orders' => $orders
        ]);
    }
}
