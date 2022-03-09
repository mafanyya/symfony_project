<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ByAgeController extends AbstractController
{

  /**
   * @Route ("/by-age", name="by-age")
   * @return Response
   */
  public function byAge(): Response
  {
    return $this->render('Items/items.html.twig', [
      'type' => 'byage'
    ]);
  }

}
