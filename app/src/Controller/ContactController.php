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

class ContactController extends AbstractController
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

//    /**
//     * @param $items
//     * @return float|int
//     */
//    private function calculateSumOfItems($items): float|int
//    {
//        $itemCount = count($items);
//        for($item = 0; $item <= $itemCount; $item++) {
//            $prices[] = $items[$item]['price'];
//        }
//        return array_sum($prices);
//    }


    private function total()
    {
            $currentUser = $this->userRepository->find($this->getUser());

            $userId = $currentUser->getId();
            $items = $this->itemRepository->findLikedItems($userId);
            if ($items != null) {
                $maxKey = max(array_keys($items));
                $prices = array();

                for ($key = 0; $key <= $maxKey; $key++) {
                    $a = $items[$key];
                    $b = $a['price'];

                    $prices[] = $b;
                }
                $total = array_sum($prices);
            } else {
                $total = 0;
            }
            return $total;

    }

  /**
   * @Route ("/", name="root")
   * @return Response
   */
  public function index(): Response
  {
      $user = $this->getUser();


    return $this->render('base.html.twig',
    [
       'name' => 'Homepage',
        'isLogin' => $user,
    ]);

  }
    /**
     * @Route ("/cart", name="cart")
     * @return Response
     */
    public function cart(Request $request, ManagerRegistry $doctrine):Response
    {
        $user = $this->getUser();

        if($user !== null) {

//        dump($this->calculateSumOfItems($this->itemRepository->findAllItems()));
            $this->total();

            if ($request->getMethod() == 'POST') {
                $name = $request->request->get('action');
                if ($name == 'remove_from_cart') {
                    $itemId = $request->request->get('item_id');
                    $item = $this->itemRepository->find($itemId);
                    $currentUser = $this->userRepository->find($this->getUser());
                    $currentUser->removeLikedItem($item);
                    $entityManager = $doctrine->getManager();
                    $entityManager->persist($currentUser);
                    $entityManager->flush();

                }
            }

            $currentUser = $this->userRepository->find($this->getUser());
            $userId = $currentUser->getId();

            $total = $this->total();

            return $this->render('Items/cart.html.twig', [
                'name' => 'My cart',
                'items' => $this->itemRepository->findLikedItems($userId),
                'total' => $total
            ]);

        } else{
            return $this->redirectToRoute('login');}
    }

}
