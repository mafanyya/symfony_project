<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

  /**
   * @Route ("/", name="root")
   * @return Response
   */
  public function index(): Response
  {
    return $this->render('base.html.twig',
    [
       'name' => 'Homepage'
    ]);
  }
    /**
     * @Route ("/cart", name="cart")
     * @return Response
     */
    public function cart():Response
    {
        return $this->render('Items/cart.html.twig',[
            'name' => 'My cart'
        ]);

    }

  /**
   * @Route ("/contact", name="contact")
   * @return Response
   */
  public function hotDeals(): Response
  {
    return $this->render('Contact/contact.html.twig');
  }

  
}
