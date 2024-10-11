<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class AppFixtures extends Fixture
{   

    public function __construct(
        private PasswordHasherFactoryInterface $passwordHasherfactory
    )
    {
        
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User(); 
        $user->setEmail("abdlilah@gmail.com");
        $user->setPassword($this->passwordHasherfactory->getPasswordHasher(User::class)->hash(123456789)); 
        $manager->persist($user); 

        $manager->flush();
    }
}
