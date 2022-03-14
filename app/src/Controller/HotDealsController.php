<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotDealsController extends AbstractController
{

  /**
   * @Route ("/hot-deals", name="hot-deals")
   * @return Response
   */
  public function hotDeals(): Response
  {
    return $this->render('HotDeals/hot_deals.html.twig', [
      'name'=>'Hot deals'
    ]);
  }

}
