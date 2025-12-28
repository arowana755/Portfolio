<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route(
        path: '/{_locale}',
        name: 'port_main',
        requirements: ['locale' => '%app.supported_locales%'],
        defaults: ['_locale' => 'fr']
    )]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route(
        path: '/{_locale}/contact',
        name: 'port_contact',
        requirements: ['locale' => '%app.supported_locales%'],
        defaults: ['_locale' => 'fr']
    )]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route(
        path: '/{_locale}/competences',
        name: 'port_competences',
        requirements: ['locale' => '%app.supported_locales%'],
        defaults: ['_locale' => 'fr']
    )]
    public function competences(): Response
    {
        return $this->render('main/competences.html.twig', [
            'controller_name' => 'CompetencesController',
        ]);
    }

    #[Route(
        path: '/{_locale}/infos_perso',
        name: 'port_infos_perso',
        requirements: ['locale' => '%app.supported_locales%'],
        defaults: ['_locale' => 'fr']
    )]
    public function infos_perso(): Response
    {
        return $this->render('main/infos_perso.html.twig', [
            'controller_name' => 'InfosPersoController',
        ]);
    }

    #[Route(
        path: '/{_locale}/projets',
        name: 'port_projets',
        requirements: ['locale' => '%app.supported_locales%'],
        defaults: ['_locale' => 'fr']
    )]
    public function projets(): Response
    {
        return $this->render('main/projets.html.twig', [
            'controller_name' => 'ProjetsController',
        ]);
    }
}
