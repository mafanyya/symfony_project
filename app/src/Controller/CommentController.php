<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\Type\CommentType;
use Doctrine\DBAL\Types\ObjectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
//    #[Route('/comment', name: 'commentType')]
//    public function new(): Response
//    {
//        // creates a task object and initializes some data for this example
//        $comment = new Comment();
//        $comment->setNickname('Bob');
//        $comment->setEmail('bob@gmail.com');
//        $comment->setComment('Write a comment');
//        $comment->setDueDate(new \DateTime('tomorrow'));
//        $form = $this->createForm(CommentType::class, $comment);
//
//        return $this->renderForm('test.html.twig',[
//            'commentForm' => $form,
//        ]);
//
//    }



//    public function new(): Response
//    {
//        // creates a task object and initializes some data for this example
//        $comment = new Comment();
//        $comment->setNickname('Bob');
//        $comment->setEmail('bob@gmail.com');
//        $comment->setComment('Write a comment');
//        $comment->setDueDate(new \DateTime('tomorrow'));
//
//        $form = $this->createFormBuilder($comment)
//            ->add('nickname', TextType::class)
//            ->add('email', TextType::class)
//            ->add('comment', TextType::class)
//            ->add('duedate', DateType::class)
//            ->add('save', SubmitType::class, ['label' => 'Make comment'])
//            ->getForm();
//
//        $form = $this->createForm(CommentType::class, $comment);
//
//    }
}