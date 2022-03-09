<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function index(): Response
    {
        $urlHome = $this->generateUrl('default');
        return $this->render('default/index.html.twig', [
            'urlHome' => $urlHome,
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $urlContact = $this->generateUrl('contact');
        return $this->render('default/contact.html.twig', [
            'urlContact' => $urlContact,
            'controller_name' => 'DefaultController',
        ]);
    }
    public function displayGames(): Response
    {
        $urlDisplayGames = $this->generateUrl('displayGames');
        return $this->render('default/displayGames.html.twig', [
            'urlDisplayGames' => $urlDisplayGames,
            'controller_name' => 'DefaultController',
        ]);
    }
}
