<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Item;
use App\Form\Type\CommentType;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
use App\Repository\ItemRepository;
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

  public function __construct(CategoryRepository $categoryRepository, ItemRepository $itemRepository, CommentRepository $commentRepository) {
    $this->categoryRepository = $categoryRepository;
    $this->itemRepository = $itemRepository;
    $this->commentRepository = $commentRepository;
  }

    #[Route('/show/{id}', name: 'show-one')]
    public function show($id, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($request->getMethod() == 'POST') {
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

            // return anything you want

        }

        $item = $this->itemRepository->find($id);
        return $this->render('Items/show.html.twig', [
            'item' => $item,
            'name' => 'Buy toy',
            'categories' => $this->categoryRepository->findAll(),
            'comments' => $this->commentRepository->findCommentsByItem($item),
        ]);
    }

    #[Route('/showw/{id}', name: 'showw-one')]
    public function showw(Item $item): Response
    {
        $item = $this->itemRepository->find($item);
        return $this->render('Items/show.html.twig', [
            'item' => $item,
            'categories' => $this->categoryRepository->findAll(),
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
   * @Route ("/by-category/action-figures", name="by-category1")
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
   * @Route ("/by-category/baby-and-preschool-toys", name="by-category2")
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
   * @Route ("/by-category/bikes-and-scooters", name="by-category3")
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
   * @Route ("/by-category/building-sets", name="by-category4")
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
   * @Route ("/by-category/dolls-and-stuffed-animals", name="by-category5")
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
   * @Route ("/by-category/games-and-puzzles", name="by-category6")
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
   * @Route ("/by-category/arts-and-crafts", name="by-category7")
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
   * @Route ("/by-category/learning", name="by-category8")
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
   * @Route ("/by-category/outdoor-play", name="by-category9")
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
   * @Route ("/by-category/pretend-play", name="by-category10")
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
   * @Route ("/by-category/steam-toys", name="by-category11")
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
   * @Route ("/by-category/remote-control-toys", name="by-category12")
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
