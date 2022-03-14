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
    $category1->setName('Action figures');
    $manager->persist($category1);

    $category2 = new Category();
    $category2->setName('Baby and preschool toys');
    $manager->persist($category2);

    $category3 = new Category();
    $category3->setName('Bikes and scooters');
    $manager->persist($category3);

    $category4 = new Category();
    $category4->setName('Building sets');
    $manager->persist($category4);

    $category5 = new Category();
    $category5->setName('Dolls and-stuffed animals');
    $manager->persist($category5);

    $category6 = new Category();
    $category6->setName('Games and puzzles');
    $manager->persist($category6);

    $category7 = new Category();
    $category7->setName('Arts and crafts');
    $manager->persist($category7);

    $category8 = new Category();
    $category8->setName('Learning');
    $manager->persist($category8);

    $category9 = new Category();
    $category9->setName('Outdoor play');
    $manager->persist($category9);

    $category10 = new Category();
    $category10->setName('Pretend play');
    $manager->persist($category10);

    $category11 = new Category();
    $category11->setName('Steam toys');
    $manager->persist($category11);

    $category12 = new Category();
    $category12->setName('Remote control toys');
    $manager->persist($category12);

    $manager->flush();
  }
}
