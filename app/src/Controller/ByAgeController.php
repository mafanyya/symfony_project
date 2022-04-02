<?php

namespace App\Controller;

use App\Repository\AgeRepository;
use App\Repository\ItemRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ByAgeController extends AbstractController
{
  private AgeRepository $ageRepository;
  private ItemRepository $itemRepository;
  private CategoryRepository $categoryRepository;

  public function __construct(AgeRepository $ageRepository, ItemRepository $itemRepository, CategoryRepository $categoryRepository) {
    $this->ageRepository = $ageRepository;
    $this->itemRepository = $itemRepository;
    $this->categoryRepository = $categoryRepository;
  }

  /**
   * @Route ("/by-age", name="by-age")
   * @return Response
   */
  public function byAge(): Response
  {
    return $this->render('Items/items.html.twig', [
      'name' => 'By age',
      'category_name' => 'By age',
      'items' => $this->itemRepository->findAll(),
      'ages' => $this->ageRepository->findAll(),
      'categories' => $this->ageRepository->findAll(),
    ]);
  }

  /**
   * @Route ("/by-age/0--2-years", name="0-2 years")
   * @return Response
   */
  public function age_02(): Response
  {

    return $this->render('Items/items.html.twig', [
        'name' => 'By age',
      'category_name' => '0-24 months',
        'items' => $this->itemRepository->findItemsByAge('0-2 years'),
        'ages' => $this->ageRepository->findAll(),
        'categories' => $this->ageRepository->findAll(),
    ]);
  }

  /**
   * @Route ("/by-age/3--4-years", name="3-4 years")
   * @return Response
   */
  public function age_34(): Response
  {

    return $this->render('Items/items.html.twig', [
        'name' => 'By age',
        'category_name' => '3-4 years',
        'items' => $this->itemRepository->findItemsByAge('3-4 years'),
        'ages' => $this->ageRepository->findAll(),
        'categories' => $this->ageRepository->findAll(),
    ]);
  }

  /**
   * @Route ("/by-age/5--7-years", name="5-7 years")
   * @return Response
   */
  public function age_57(): Response
  {

    return $this->render('Items/items.html.twig', [
        'name' => 'By age',
        'category_name' => '5-7 years',
        'items' => $this->itemRepository->findItemsByAge('5-7 years'),
        'ages' => $this->ageRepository->findAll(),
        'categories' => $this->ageRepository->findAll(),
    ]);
  }

  /**
   * @Route ("/by-age/8--10-years", name="8-10 years")
   * @return Response
   */
  public function age_810(): Response
  {

    return $this->render('Items/items.html.twig', [
        'name' => 'By age',
        'category_name'=>'8-10 years',
        'items' => $this->itemRepository->findItemsByAge('8-10 years'),
        'ages' => $this->ageRepository->findAll(),
        'categories' => $this->ageRepository->findAll(),
    ]);
  }

  /**
   * @Route ("/by-age/11-years-and-up", name="11+ years")
   * @return Response
   */
  public function age_11(): Response
  {

    return $this->render('Items/items.html.twig', [
        'name' => 'By age',
        'category_name'=>'11+ years',
        'items' => $this->itemRepository->findItemsByAge('11+ years'),
        'ages' => $this->ageRepository->findAll(),
        'categories' => $this->ageRepository->findAll(),
    ]);
  }




}
