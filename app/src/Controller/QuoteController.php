<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController
{

  /**
   * @Route ("/", name="root")
   * @return Response
   */
  public function index(): Response
  {
    return $this->render('base.html.twig');
  }

  /**
   * @Route("/siema", name="cokolwiek")
   * @return Response
   */
  public function costam(): Response
  {
    $costam = "siema";
    return $this->render('base.html.twig',[
      'costam' => $costam
    ]);
  }

}
