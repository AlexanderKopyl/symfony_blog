<?php

declare(strict_types=1);

namespace KopylSolution\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginController extends AbstractController
{
    #[Route('/admin/login', name: 'app_admin_login')]
    public function index(): Response
    {
        return $this->render('@admin_bundle/login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}