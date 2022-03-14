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
      'name' => 'By category'

    ]);
  }
  /**
   * @Route ("/by-category/action-figures", name="by-category1")
   * @return Response
   */
  public function actionFigures():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Action figures',
      'items' => $this->itemRepository->findItemsByCategory('Action figures'),
    ]);

  }

  /**
   * @Route ("/by-category/baby-and-preschool-toys", name="by-category2")
   * @return Response
   */
  public function babyAndPreschoolToys():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Baby and preschool toys',
      'items' => $this->itemRepository->findItemsByCategory('Baby and preschool toys'),
    ]);

  }
  /**
   * @Route ("/by-category/bikes-and-scooters", name="by-category3")
   * @return Response
   */
  public function bikesAndScooters():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Bikes and scooters',
      'items' => $this->itemRepository->findItemsByCategory('Bikes and scooters'),
    ]);

  }

  /**
   * @Route ("/by-category/building-sets", name="by-category4")
   * @return Response
   */
  public function buildingSets():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Building sets',
      'items' => $this->itemRepository->findItemsByCategory('Building sets'),
    ]);

  }

  /**
   * @Route ("/by-category/dolls-and-stuffed-animals", name="by-category5")
   * @return Response
   */
  public function dollsAndStuffedAnimals():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Dolls and-stuffed animals',
      'items' => $this->itemRepository->findItemsByCategory('Dolls and-stuffed animals'),
    ]);

  }

  /**
   * @Route ("/by-category/games-and-puzzles", name="by-category6")
   * @return Response
   */
  public function gamesAndPuzzles():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Games and puzzles',
      'items' => $this->itemRepository->findItemsByCategory('Games and puzzles'),
    ]);

  }

  /**
   * @Route ("/by-category/arts-and-crafts", name="by-category7")
   * @return Response
   */
  public function artsAndCrafts():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Arts and crafts',
      'items' => $this->itemRepository->findItemsByCategory('Arts and crafts'),
    ]);

  }

  /**
   * @Route ("/by-category/learning", name="by-category8")
   * @return Response
   */
  public function learning():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Learning',
      'items' => $this->itemRepository->findItemsByCategory('Learning'),
    ]);

  }

  /**
   * @Route ("/by-category/outdoor-play", name="by-category9")
   * @return Response
   */
  public function outdoorPlay():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Outdoor play',
      'items' => $this->itemRepository->findItemsByCategory('Outdoor play'),
    ]);

  }

  /**
   * @Route ("/by-category/pretend-play", name="by-category10")
   * @return Response
   */
  public function pretendPlay():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Pretend play',
      'items' => $this->itemRepository->findItemsByCategory('Pretend play'),
    ]);

  }

  /**
   * @Route ("/by-category/steam-toys", name="by-category11")
   * @return Response
   */
  public function steamToys():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Steam toys',
      'items' => $this->itemRepository->findItemsByCategory('Steam toys'),
    ]);

  }

  /**
   * @Route ("/by-category/remote-control-toys", name="by-category12")
   * @return Response
   */
  public function remoteControlToys():Response
  {
    return $this->render('Items/items.html.twig', [
      'name'=> 'Remote control toys',
      'items' => $this->itemRepository->findItemsByCategory('Remote control toys'),
    ]);

  }

}
