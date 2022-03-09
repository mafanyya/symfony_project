<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController
{

  /**
   * @Route ("/contact", name="contact")
   * @return Response
   */
  public function hotDeals(): Response
  {
    return $this->render('Contact/contact.html.twig');
  }




}
