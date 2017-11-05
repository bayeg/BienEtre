<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestController extends Controller
{
    /**
     * @Route("/testtest")
     */
    public function testAction()
    {
        return $this->render('AppBundle:Test:test.html.twig', array(
            // ...
        ));
    }

}
