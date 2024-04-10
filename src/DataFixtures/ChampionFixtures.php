<?php

namespace App\DataFixtures;

use App\Entity\Champion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ChampionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $champion1 = new Champion();
        $champion1->setPv(5);
        $champion1->setPower(5);
        $champion1->setName('Common champion');

        $champion2 = new Champion();
        $champion2->setPv(10);
        $champion2->setPower(10);
        $champion2->setName('Rare champion');

        $champion3 = new Champion();
        $champion3->setPv(15);
        $champion3->setPower(15);
        $champion3->setName('Epic champion');

        $champion4 = new Champion();
        $champion4->setPv(20);
        $champion4->setPower(20);
        $champion4->setName('Legend champion');



        $manager->persist($champion1);
        $manager->persist($champion2);
        $manager->persist($champion3);
        $manager->persist($champion4);
        $manager->flush();
    }
}
