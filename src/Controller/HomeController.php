<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

 

    #[Route('/sidebarLeft', name: 'route_sidebar_left')]
    
    public function sidebarLeft(): Response
    {
        return $this->render('home/sidebar-left.html.twig');
    }

    #[Route('/sidebarright', name: 'route_sidebar_right')]
    
    public function sidebarright(): Response
    {
        return $this->render('home/sidebar-right.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }

    #[Route('/signin', name: 'signin')]
    
    public function signin(): Response
    {
        return $this->render('home/signin.html.twig');
    }
    #[Route('/signup', name: 'signup')]
    
    public function signup(): Response
    {
        return $this->render('home/signup.html.twig');
    }
    
    #[Route('/about', name: 'About')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }
}
