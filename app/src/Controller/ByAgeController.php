<?php

namespace App\Controller;

use App\Repository\AgeRepository;
use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ByAgeController extends AbstractController
{
  private AgeRepository $ageRepository;
  private ItemRepository $itemRepository;

  public function __construct(AgeRepository $ageRepository, ItemRepository $itemRepository) {
    $this->ageRepository = $ageRepository;
    $this->itemRepository = $itemRepository;
  }

  /**
   * @Route ("/by-age", name="by-age")
   * @return Response
   */
  public function byAge(): Response
  {
    return $this->render('Items/items.html.twig', [
      'name' => 'By age',
      'items' => $this->itemRepository->findAll(),
    ]);
  }

  /**
   * @Route ("/by-age/0--2-years", name="by-age1")
   * @return Response
   */
  public function age_02(): Response
  {

    return $this->render('Items/items.html.twig', [
      'name' => '0-24 months',
        'items' => $this->itemRepository->findItemsByAge('0-2 years'),
    ]);
  }

  /**
   * @Route ("/by-age/3--4-years", name="by-age2")
   * @return Response
   */
  public function age_34(): Response
  {

    return $this->render('Items/items.html.twig', [
      'name' => '3-4 years',
        'items' => $this->itemRepository->findItemsByAge('3-4 years'),
    ]);
  }

  /**
   * @Route ("/by-age/5--7-years", name="by-age3")
   * @return Response
   */
  public function age_57(): Response
  {

    return $this->render('Items/items.html.twig', [
      'name' => '5-7 years',
        'items' => $this->itemRepository->findItemsByAge('5-7 years'),
    ]);
  }

  /**
   * @Route ("/by-age/8--10-years", name="by-age4")
   * @return Response
   */
  public function age_810(): Response
  {

    return $this->render('Items/items.html.twig', [
      'name'=>'8-10 years',
        'items' => $this->itemRepository->findItemsByAge('8-10 years'),
    ]);
  }

  /**
   * @Route ("/by-age/11-years-and-up", name="by-age5")
   * @return Response
   */
  public function age_11(): Response
  {

    return $this->render('Items/items.html.twig', [
      'name'=>'11+ years',
        'items' => $this->itemRepository->findItemsByAge('11+ years'),
    ]);
  }




}
