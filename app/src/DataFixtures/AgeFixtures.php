<?php

namespace App\DataFixtures;

use App\Entity\Age;
use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AgeFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $age1 = new Age();
    $age1->setName('0-2 years');
    $manager->persist($age1);

    $age2 = new Age();
    $age2->setName('3-4 years');
    $manager->persist($age2);

    $age3 = new Age();
    $age3->setName('5-7 years');
    $manager->persist($age3);

    $age4 = new Age();
    $age4->setName('8-10 years');
    $manager->persist($age4);

    $age5 = new Age();
    $age5->setName('11+ years');
    $manager->persist($age5);


    $manager->flush();
  }
}

