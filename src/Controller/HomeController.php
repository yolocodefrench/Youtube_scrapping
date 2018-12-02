<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\LienYoutube;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(LienYoutube::class);
        $liens = $repository->findAll();
        return $this->render('home.html.twig', [
            'liens' => $liens
        ]);
    }
}
