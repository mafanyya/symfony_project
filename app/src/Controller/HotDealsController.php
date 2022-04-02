<?php

namespace App\Controller;
use App\Entity\Comment;
use App\Entity\Item;
use App\Entity\User;
use App\Form\Type\CommentType;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
use App\Repository\ItemRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use MongoDB\Driver\Manager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotDealsController extends AbstractController
{
    private CategoryRepository $categoryRepository;
    private ItemRepository $itemRepository;
    private CommentRepository $commentRepository;
    private UserRepository $userRepository;

    public function __construct(CategoryRepository $categoryRepository, ItemRepository $itemRepository, CommentRepository $commentRepository, UserRepository $userRepository) {
        $this->categoryRepository = $categoryRepository;
        $this->itemRepository = $itemRepository;
        $this->commentRepository = $commentRepository;
        $this->userRepository = $userRepository;
    }

  /**
   * @Route ("/hot-deals", name="hot-deals")
   * @return Response
   */
  public function hotDeals(): Response
  {
      $items = $this->itemRepository->findAllItems();


                              //    FOR
              // get random item from items, set price *0.8

      for ($element=0;$element < 6;$element++) {
          $randKey = array_rand($items, 1);      // get random key from items
          $randomItem = $items[$randKey];            // get random item
          $oldPrice = $randomItem['price'];          // get old price of the item
          $randomItem['newPrice'] = round($oldPrice * 0.8,2); // set new price for the item
          $foundItems[] = $randomItem;               // add found item to $foundItems array
      }

    return $this->render('HotDeals/hot_deals.html.twig', [
      'name'=>'Hot deals',
        'items' => $foundItems,
    ]);
  }



}
