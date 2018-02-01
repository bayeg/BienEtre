<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PromotionControllerTest extends WebTestCase
{
    public function testPromotionlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/promotionList');
    }

}
