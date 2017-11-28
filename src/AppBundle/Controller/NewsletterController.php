<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsletterController extends Controller
{
    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function newsletterAction()
    {
        return $this->render(':Front/Newsletter:newsletter.html.twig', array(
            // ...
        ));
    }

}
