<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @Route ("/test", name="test")
     * @return Response
     */
    public function hotDeals(): Response
    {
        return $this->render('test.html.twig', [

        ]);
    }

}