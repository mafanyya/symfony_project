<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
  {

      $admin = new User();
      $admin->setEmail('admin@gmail.com');
      $admin->setRoles(['ROLE_ADMIN']);
      $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin'));

      $manager->persist($admin);
    $manager->flush();
  }
}

