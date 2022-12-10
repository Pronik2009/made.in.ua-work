<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Vacancy;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Made.in.ua Work');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Внутрішній стаф');
        yield MenuItem::linkToCrud('Користувачі адмінки', 'fas fa-user', User::class);

        yield MenuItem::section('Роботодавцеві');
        yield MenuItem::linkToCrud('Вакансії', 'fas fa-briefcase', Vacancy::class);
    }
}
