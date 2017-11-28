<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsletterControllerTest extends WebTestCase
{
    public function testNewsletter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newsletter');
    }

}
