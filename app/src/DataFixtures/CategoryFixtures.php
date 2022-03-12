<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $category1 = new Category();
    $category1->setName('action-figures-and-playsets');
    $manager->persist($category1);

    $category2 = new Category();
    $category2->setName('baby-toddler-and-preschool-learning-toys');
    $manager->persist($category2);

    $category3 = new Category();
    $category3->setName('bikes-scooters-and-ride-ons');
    $manager->persist($category3);

    $category4 = new Category();
    $category4->setName('building-sets-and-blocks');
    $manager->persist($category4);

    $category5 = new Category();
    $category5->setName('dolls-collectibles-and-stuffed-animals');
    $manager->persist($category5);

    $category6 = new Category();
    $category6->setName('games-and-puzzles');
    $manager->persist($category6);

    $category7 = new Category();
    $category7->setName('kids-arts-and-crafts');
    $manager->persist($category7);

    $category8 = new Category();
    $category8->setName('learning');
    $manager->persist($category8);

    $category9 = new Category();
    $category9->setName('outdoor-play');
    $manager->persist($category9);

    $category10 = new Category();
    $category10->setName('pretend-play-and-dress-up');
    $manager->persist($category10);

    $category11 = new Category();
    $category11->setName('steam-toys');
    $manager->persist($category11);

    $category12 = new Category();
    $category12->setName('vehicles-and-remote-control');
    $manager->persist($category12);

    $category13 = new Category();
    $category13->setName('the-character-shop');
    $manager->persist($category13);


    $manager->flush();
  }
}
