<?php
/**
 * Created by PhpStorm.
 * User: bayeg
 * Date: 16/10/2017
 * Time: 19:44
 */

namespace AppBundle\Datafixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $objects = Fixtures::load(__DIR__ . '/fixtures.yml', $manager);
    }
}