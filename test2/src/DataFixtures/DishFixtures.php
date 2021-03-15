<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Dish;


class DishFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dish1 = new Dish();
        $dish1->setName('green salad');
        $dish1->setVegan(true);
        $dish1->setPrice(6.50);


        $dish2 = new Dish();
        $dish2->setName('tiramisiu');
        $dish2->setVegan(false);
        $dish2->setPrice(5.00);

        $manager->persist($dish1);
        $manager->persist($dish2);
    }
}
