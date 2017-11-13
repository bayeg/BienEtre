<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServiceCategoryControllerTest extends WebTestCase
{
    public function testServicecategorylist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/serviceCategory');
    }

    public function testServicecategorydetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/serviceCategoryDetail/{id}');
    }

}
