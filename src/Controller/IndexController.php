<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig');
    }

    #[Route('/start')]
    public function start(): Response
    {
        return $this->render('index/start.html.twig');
    }
}
