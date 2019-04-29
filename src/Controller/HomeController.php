<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->info("MY INFO Start PAGE");
        $logger->error("MY ERRORStart page");
        return $this->render('home/index.html.twig', [
            'title' => 'Hello new Heroku app',
        ]);
    }
}
