<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use App\Repository\CategoryRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Doctrine\ORM\EntityManagerInterface;

use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;



class ProductCrudController extends AbstractCrudController
{
    
    private $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo) 
    {
        $this->categoryRepo = $categoryRepo;
    }

    public static function getEntityFqcn(): string
    {
        return Product::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
            
        // yield ImageField::new("image")->setUploadDir('public/images/');
        // dd();

        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('category', 'Category')->onlyOnIndex(),
            AssociationField::new('category')->onlyOnForms(),
            TextField::new('title'),
            TextField::new('short_notes'),
            TextareaField::new('description'),
            TextField::new('price'),
            TextField::new('discount_price'),
            IntegerField::new('quantity'),
            ImageField::new('image', 'Images')
                ->setBasePath('images/')
                ->setUploadDir('public/images')
                ->setRequired(false)
                ->setFormTypeOptions([
                    'multiple' => true   
                ]),
        ];
    }

    public function createEntity( string $entityFqcn)
    {
        $product = new Product();
        $product->setUserId($this->getUser()->getId());

        return $product;
    }
    
}
