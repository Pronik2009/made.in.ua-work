<?php

namespace App\Controller\Admin;

use App\Entity\Vacancy;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VacancyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vacancy::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('companyName')
            ->add('country')
            ->add('city')
            ->add('speciality')
            ->add('salary')
            ->add('endDate');
    }
}
