<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture {

    public function load(ObjectManager $manager) {
        // $product = new Product();
        // $manager->persist($product);

        $admin = new User();
        $admin->setUsername("adminDisko");
        $admin->setUsernameCanonical("adminDisko");
        $admin->setEmail("amodifier@gmail.com");
        $admin->setEmailCanonical("amodifier@gmail.com");
        $admin->setEnabled(true);
        $admin->setPlainPassword("adminDisko");
        $admin->addRole("ROLE_ADMIN");

        $manager->persist($admin);
        $manager->flush();
    }

}
