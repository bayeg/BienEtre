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

        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $providers
        ]);
    }

    /**
     * @Route("/provider/{slug}", name="providerDetail")
     */
    public function providerDetailAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $provider = $em->getRepository("AppBundle:Provider")
            ->findOneBy(array(
                "slug" => $slug
                )
            );

        return $this->render(':Front/Provider/Detail:provider_detail.html.twig', [
            "provider" => $provider
        ]);
    }

}
