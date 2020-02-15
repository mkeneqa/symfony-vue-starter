<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/api/about", name="about")
     */
    public function about()
    {
        return new JsonResponse(
            array('data' => 'HEY'),
            JsonResponse::HTTP_OK
        );
    }
}
