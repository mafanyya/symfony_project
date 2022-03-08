<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
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
   * @Route ("/shop_by_age", name="shop_by_age")
   * @return Response
   */

  public function shop_by_age(): Response
  {
    return $this->render('shop_by_age.html.twig');
  }

  /**
   * @Route ("/shop_by_category", name="shop_by_category")
   * @return Response
   */

  public function shop_by_category(): Response
  {
    return $this->render('shop_by_category.html.twig');
  }

  /**
   * @Route ("/contact", name="contact")
   * @return Response
   */

  public function contact(): Response
  {
    return $this->render('contact.html.twig');
  }

  /**
   * @Route ("/registration", name="registration")
   * @return Response
   */

  public function registration(): Response
  {
    return $this->render('registration.html.twig');
  }




}
