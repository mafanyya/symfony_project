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

class ByCategoryController extends AbstractController
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

    #[Route('/show/{id}', name: 'show-one')]
    public function show($id, Request $request, ManagerRegistry $doctrine): Response
    {

        if ($request->getMethod() == 'POST') {
            $name = $request->request->get('action');

            if ($name == 'add_comment'){
            // get post values from form
            $email = $request->request->get('email');
            $comment = $request->request->get('comment');
            $rating = $request->request->get('rating');
            $item = $this->itemRepository->find($id);

            // create new Comment Object, persist it to the database
            $newComment = new Comment();
            $newComment->setEmail($email);
            $newComment->setComment($comment);
            $newComment->setRating($rating);
            $newComment->setItem($item);
            $newComment->setDuedate(new \DateTime());

            $entityManager = $doctrine->getManager();
            $entityManager->persist($newComment);
            $entityManager->flush();

            $this->addFlash(
                'notice',
                'Success!'

            );
            return $this->redirectToRoute('show-one',
            ['id' => $id]);

            } elseif($name == 'add_to_cart'){

                $itemId = $request->request->get('item_id');
                $item = $this->itemRepository->find($itemId);

                $currentUser = $this->userRepository->find($this->getUser());
                if($currentUser !== null)
                {
                    $currentUser->addLikedItem($item);
                    $entityManager = $doctrine->getManager();
                    $entityManager->persist($currentUser);
                    $entityManager->flush();
                }else{
                    return $this->redirectToRoute('registration');
                }

            }elseif ($name == 'remove_comment'){

                $commentId = $request->request->get('comment_id');

                $comment = $this->commentRepository->find($commentId);
                $entityManager = $doctrine->getManager();
                $entityManager->remove($comment);
                $entityManager->flush();
            }

        }

        $item = $this->itemRepository->find($id);
        return $this->render('Items/show.html.twig', [
            'item' => $item,
            'name' => 'Buy toy',
            'categories' => $this->categoryRepository->findAll(),
            'comments' => $this->commentRepository->findCommentsByItem($item),
        ]);
    }

    /**
     * @Route ("/by-category", name="by-category")
     * @return Response
     */
    public function byCategory(): Response
    {

        // info about current logged user
        $currentUser = $this->getUser();


        return $this->render('Items/items.html.twig', [
            'items' => $this->itemRepository->findAll(),
            'name' => 'By category',
            'category_name' => 'By category',
            'categories' => $this->categoryRepository->findAll(),

        ]);
    }

    /**
   * @Route ("/by-category/action-figures", name="Action figures")
   * @return Response
   */
  public function actionFigures():Response
  {
      $items = $this->itemRepository->findItemsByCategory('Action figures');

    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
      'category_name' => 'Action figures',
      'items' => $this->itemRepository->findItemsByCategory('Action figures'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

    /**
   * @Route ("/by-category/baby-and-preschool-toys", name="Baby and preschool toys")
   * @return Response
   */
  public function babyAndPreschoolToys():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Baby and preschool toys',
        'items' => $this->itemRepository->findItemsByCategory('Baby and preschool toys'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }
    /**
   * @Route ("/by-category/bikes-and-scooters", name="Bikes and scooters")
   * @return Response
   */
  public function bikesAndScooters():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Bikes and scooters',
      'items' => $this->itemRepository->findItemsByCategory('Bikes and scooters'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/building-sets", name="Building sets")
   * @return Response
   */
  public function buildingSets():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name'=> 'Building sets',
      'items' => $this->itemRepository->findItemsByCategory('Building sets'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/dolls-and-stuffed-animals", name="Dolls and-stuffed animals")
   * @return Response
   */
  public function dollsAndStuffedAnimals():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name'=> 'Dolls and-stuffed animals',
      'items' => $this->itemRepository->findItemsByCategory('Dolls and-stuffed animals'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/games-and-puzzles", name="Games and puzzles")
   * @return Response
   */
  public function gamesAndPuzzles():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Games and puzzles',
      'items' => $this->itemRepository->findItemsByCategory('Games and puzzles'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/arts-and-crafts", name="Arts and crafts")
   * @return Response
   */
  public function artsAndCrafts():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Arts and crafts',
      'items' => $this->itemRepository->findItemsByCategory('Arts and crafts'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/learning", name="Learning")
   * @return Response
   */
  public function learning():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Learning',
      'items' => $this->itemRepository->findItemsByCategory('Learning'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/outdoor-play", name="Outdoor play")
   * @return Response
   */
  public function outdoorPlay():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Outdoor play',
      'items' => $this->itemRepository->findItemsByCategory('Outdoor play'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/pretend-play", name="Pretend play")
   * @return Response
   */
  public function pretendPlay():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Pretend play',
      'items' => $this->itemRepository->findItemsByCategory('Pretend play'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/steam-toys", name="Steam toys")
   * @return Response
   */
  public function steamToys():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Steam toys',
      'items' => $this->itemRepository->findItemsByCategory('Steam toys'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

  /**
   * @Route ("/by-category/remote-control-toys", name="Remote control toys")
   * @return Response
   */
  public function remoteControlToys():Response
  {
    return $this->render('Items/items.html.twig', [
        'name' => 'By category',
        'category_name' => 'Remote control toys',
      'items' => $this->itemRepository->findItemsByCategory('Remote control toys'),
        'categories' => $this->categoryRepository->findAll(),
    ]);

  }

}
