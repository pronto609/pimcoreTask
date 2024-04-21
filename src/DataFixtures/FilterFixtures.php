<?php

namespace App\DataFixtures;

use App\Entity\Color;
use App\Entity\Filter;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;

class FilterFixtures extends Fixture
{
    public function __construct(
        private Generator $faker
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $types = [];
        for ($i = 1; $i <= 3; $i++) {
            $type = new Type();
            $type->setName('Test'. $i);
            $manager->persist($type);
            $types[] = $type;
        }

        for ($i = 1; $i < 10; $i++) {
            $filter = new Filter();
            $filter->setCategoryId($i);
            $filter->setProductId(10 - $i);

            $color = $this->makeColor($i);
            $manager->persist($color);

            $filter->addColor($color);
            $filter->setType($types[array_rand($types)]);
            $manager->persist($filter);
        }

        $manager->flush();
    }

    private function makeColor(int $colorId)
    {
        $color = new Color();
        $color->setName('color' . $colorId);
        $color->setValue('colorValue' . $colorId);
        return $color;
    }
}
