<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ByBrandController extends AbstractController
{

  /**
   * @Route ("/by-brand", name="by-brand")
   * @return Response
   */
  public function byBrand(): Response
  {
    return $this->render('Items/items.html.twig',[
      'type' => 'bybrand'
    ]);
  }

}
