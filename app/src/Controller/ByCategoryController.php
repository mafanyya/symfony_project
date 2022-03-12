<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ByCategoryController extends AbstractController
{

  /**
   * @Route ("/by-category", name="by-category")
   * @return Response
   */
  public function byCategory(): Response
  {
    return $this->render('Items/items.html.twig', [
      'type' => 'bycategory'
    ]);
  }

}
