<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
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
        path: '/{_locale}/cv',
        name: 'port_cv',
        requirements: ['locale' => '%app.supported_locales%'],
        defaults: ['_locale' => 'fr']
    )]
    public function downloadCv(): BinaryFileResponse
    {
        $file = $this->getParameter('kernel.project_dir') . '/public/fichiers/cv-DAGAND-Timothee.pdf';

        return new BinaryFileResponse($file);
    }
}
