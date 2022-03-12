<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ByCategoryController extends AbstractController
{
  private CategoryRepository $categoryRepository;
  private ItemRepository $itemRepository;

  public function __construct(CategoryRepository $categoryRepository, ItemRepository $itemRepository) {
    $this->categoryRepository = $categoryRepository;
    $this->itemRepository = $itemRepository;
  }

  /**
   * @Route ("/by-category", name="by-category")
   * @return Response
   */
  public function byCategory(): Response
  {
    return $this->render('Items/items.html.twig', [
      'items' => $this->itemRepository->findAll(),
      'type' => 'bycategory'
    ]);
  }

}
