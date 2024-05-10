<?php

namespace App\Controller\Admin;

use App\Entity\OrderProduct;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class OrderProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OrderProduct::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add('index', 'detail');
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            IntegerField::new('order.id', 'Order Id')->hideOnForm(),
            ImageField::new('image', 'Image')->setBasePath('images/')->hideOnForm(),
            TextField::new('user.name', 'User')->hideOnForm(),
            TextField::new('title'),
            IntegerField::new('quantity'),
            TextField::new('price'),
            NumberField::new('total')->setVirtual(true)->setFormTypeOptions([
                'attr' => ['readonly' => true]
            ]),

            TextField::new('order.name', 'Name')->onlyOnDetail(),
            TextField::new('order.email', 'Email')->onlyOnDetail(),
            TextField::new('order.phone', 'Phone')->onlyOnDetail(),
            TextField::new('order.address', 'Address')->onlyOnDetail(),
            TextField::new('order.city', 'City')->onlyOnDetail(),
            TextField::new('order.paid_amount', 'Paid Amount')->onlyOnDetail(),
            TextField::new('order.payment_status', 'Payment Status')->onlyOnDetail(),
            



            ChoiceField::new('status')->setChoices([
                'CANCELED' => 'CANCELED',
                'DELIVERED' => 'DELIVERED',
                'PAID' => 'PAID',
                'SHIPPED' => 'SHIPPED',
                'RETURNED' => 'RETURNED',
                'PREPARING' => 'PREPARING',
                'SENT' => 'SENT'
            ]),

        ];
    }
    
}