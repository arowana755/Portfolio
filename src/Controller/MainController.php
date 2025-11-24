<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'port_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/contact', name: 'port_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/competences', name: 'port_competences')]
    public function competences(): Response
    {
        return $this->render('main/competences.html.twig', [
            'controller_name' => 'CompetencesController',
        ]);
    }

    #[Route('/infos_perso', name: 'port_infos_perso')]
    public function infos_perso(): Response
    {
        return $this->render('main/infos_perso.html.twig', [
            'controller_name' => 'InfosPersoController',
        ]);
    }

    #[Route('/projets', name: 'port_projets')]
    public function projets(): Response
    {
        return $this->render('main/projets.html.twig', [
            'controller_name' => 'ProjetsController',
        ]);
    }
}
