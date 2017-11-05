<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProviderController extends Controller
{
    /**
     * @Route("/provider")
     */
    public function providerListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findAll();

        return $this->render('AppBundle:Provider:provider_list.html.twig', array(
            "providers" => $providers
        ));
    }

    /**
     * @Route("/provider/{slug}")
     */
    public function providerDetailAction($slug)
    {
        return $this->render('AppBundle:Provider:provider_detail.html.twig', array(
            // ...
        ));
    }

}
