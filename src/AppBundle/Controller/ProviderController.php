<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProviderController extends Controller
{
    /**
     * @Route("/provider", name="providerList")
     */
    public function providerListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findAll();

        return $this->render('Provider/provider_list.html.twig', [
            "providers" => $providers
        ]);
    }

    /**
     * @Route("/provider/{id}", name="providerDetail")
     */
    public function providerDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $provider = $em->getRepository("AppBundle:Provider")
            ->find($id);

        return $this->render('Provider/provider_detail.html.twig', [
            "p" => $provider
        ]);
    }

}
