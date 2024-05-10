<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use App\Entity\Cart;

class CartController extends AbstractController
/**
 * Handles the cart functionality for the application.
 * 
 * The CartController provides actions for adding products to the cart, listing the cart contents, updating the quantity of items in the cart, and removing items from the cart.
 * 
 * @package App\Controller
 */
{
    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    #[Route('/cart_add/{id}', name: 'app_add_cart')]
    public function add_cart(ProductRepository $productRepository, CartRepository $cartRepository, EntityManagerInterface $entityManager, Request $request, int $id) {

        $product = $productRepository->find($id);

        $user = $this->getUser();
        
        $cart = new Cart();
        $cart->setUser($user);
        $cart->setProduct($product);
        $cart->setProducttitle($product->getTitle());
        $cart->setPrice($product->getPrice());
        
        if ($product->getDiscountprice() != 0) {
            $cart->setPrice($product->getDiscountprice());
        }

        if ($product->getImage() != null) {
            $cart->setImage($product->getImage()[0]);
        }
        
        $cart->setQuantity(1);
        if ($request->request->get('quantity')) {
            $cart->setQuantity( $request->request->get('quantity') );
        } 

        $entityManager->persist($cart);
        $entityManager->flush();
        
        return $this->redirectToRoute('app_cart_list');

    }

    #[Route('/cart_list', name: 'app_cart_list')]
    public function cart_list(CartRepository  $cartRepository) {
        
        $user = $this->getUser();
        $cart = $user->getCart();

        return $this->render('cart/list.html.twig', [
            'cart' => $cart,
        ]);
    }

    #[Route('/cart_update/{id}/{quantity}', name: 'app_cart_update')]
    public function cart_update(CartRepository  $cartRepository, EntityManagerInterface $entityManager, int $id, int $quantity) {

        $cart = $cartRepository->find($id);
        $cart->setQuantity($quantity);
        $entityManager->persist($cart);
        $entityManager->flush();
        
        return  new Response('Product updated!');
    }

    #[Route('/cart_remove/{id}', name: 'app_cart_remove')]
    public function cart_remove(CartRepository  $cartRepository, EntityManagerInterface $entityManager, int $id) {
        
        $cart = $cartRepository->find($id);
        $entityManager->remove($cart);
        $entityManager->flush();
        
        return  new Response('Product removed!');
    }
}
