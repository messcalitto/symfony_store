<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, ProductRepository $productRepository, PaginatorInterface $paginator): Response
    {
        $page = $request->query->getInt('page', 1);
        $pageSize = $request->query->getInt('pageSize', 6);
        $search = $request->query->get('search', '');

        $query = $productRepository->createQueryBuilder('p');
        $query->where('(p.title like ?1) OR (p.description like ?1)')
            ->setParameter(1, '%'.$search.'%')->getQuery();
            

        $products = $paginator->paginate(
            $query,
            $page,
            $pageSize
        );

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'search' => $search
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_details')]
    public function showProduct(ProductRepository $productRepository, int $id): Response
    {
        $product = $productRepository->find($id);

        return $this->render('home/product_details.html.twig', [
            'product' => $product,
        ]);
    }
}

