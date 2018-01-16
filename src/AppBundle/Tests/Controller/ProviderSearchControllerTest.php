<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProviderSearchControllerTest extends WebTestCase
{
    public function testProvidersearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/providerSearch');
    }

}
