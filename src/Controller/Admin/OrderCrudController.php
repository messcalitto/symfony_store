<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('name'),
            TextField::new('email'),
            TextField::new('address'),
            // IdField::new('order_id', 'Order Id'),
            // // ImageField::new('image', 'Product Image'),
            // TextField::new('name'),
            // TextField::new('title'),
            // TextField::new('quantity'),
            // TextField::new('price'),
            // TextField::new('total'),
            // TextField::new('status'),
            // TextField::new('payment_status'),
        ];
    }
    
}