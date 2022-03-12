<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $item1 = new Item();
    $item1->setName('Lego Barn Tractor');
    $item1->setPrice(59.9);
    $item1->setDescription('There are farm buildings and a tractor, plus a pig, sheep, horse, dog, hen, rooster and cows to care for.');
    $item1->setImg('https://slimages.macysassets.com/is/image/MCY/products/0/optimized/19679220_fpx.tif');
    $manager->persist($item1);

    $item2 = new Item();
    $item2->setName('Dragon ball Super Dragon Stars  Action Figure');
    $item2->setPrice(29.9);
    $item2->setDescription('Welcome the fierce battles of dragon ball into your world with these superior 6.5" dragon stars figures. Finely crafted and intricately detailed with over 16 points of articulation.');
    $item2->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/18313858_fpx.tif');
    $manager->persist($item2);

    $item3 = new Item();
    $item3->setName('Sharper Image Toy Rc Robotic Robotosaur Mini');
    $item3->setPrice(17.9);
    $item3->setDescription("Where technology meets fun your children will love the mini robot's cute size and easy-to-use.");
    $item3->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/17379211_fpx.tif');
    $manager->persist($item3);

    $manager->flush();
  }
}
