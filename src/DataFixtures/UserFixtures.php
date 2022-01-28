<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->persist((new User())
                ->setEmail('lady.dimitrescu@yahoo.ro')
                ->setPassword('trouduc')
                ->setRoles(["ROLE_ADMIN"])
        );

        $manager->flush();
    }
}
