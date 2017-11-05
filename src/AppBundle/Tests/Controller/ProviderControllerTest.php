<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProviderControllerTest extends WebTestCase
{
    public function testProviderlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/providerList');
    }

    public function testProviderdetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/provider/{slug}');
    }

}
