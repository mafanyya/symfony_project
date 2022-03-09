<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopToysController extends AbstractController
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
   * @Route ("/shop-toys", name="shop-toys")
   * @return Response
   */
  public function shopToys(): Response
  {
    return $this->render('Items/items.html.twig',[
      'type' => 'shoptoys'
    ]);
  }




}
