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

  /**
   * @Route ("/by-age/0--24-months", name="by-age1")
   * @return Response
   */
  public function age_02(): Response
  {

    return $this->render('Items/items.html.twig', [
    ]);
  }

  /**
   * @Route ("/by-age/3--4-years", name="by-age2")
   * @return Response
   */
  public function age_34(): Response
  {

    return $this->render('Items/items.html.twig', [
    ]);
  }

  /**
   * @Route ("/by-age/5--7-years", name="by-age3")
   * @return Response
   */
  public function age_57(): Response
  {

    return $this->render('Items/items.html.twig', [
    ]);
  }

  /**
   * @Route ("/by-age/8--10-years", name="by-age4")
   * @return Response
   */
  public function age_810(): Response
  {

    return $this->render('Items/items.html.twig', [
    ]);
  }

  /**
   * @Route ("/by-age/11-years-and-up", name="by-age5")
   * @return Response
   */
  public function age_11(): Response
  {

    return $this->render('Items/items.html.twig', [
    ]);
  }




}
