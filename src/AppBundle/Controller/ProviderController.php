<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProviderType;
use AppBundle\Service\KnpPaginatorGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Provider;


class ProviderController extends Controller
{
    /**
     * @Route("/providers", name="provider_list")
     */
    public function providerListAction(Request $request)
    {
        //get repo
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findAllNotBannedOrderedByName();

        //pagination service
        $kpnGenerator = $this->get('app.knp_paginator_generator');
        $providers = $kpnGenerator->generate($providers, 1, 8, $request);

        //render template
        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $providers,
        ]);
    }

    /**
     * @Route("/providers/{slug}", name="provider_detail")
     */
    public function providerDetailAction($slug)
    {
        //get repo
        $em = $this->getDoctrine()->getManager();
        $provider = $em->getRepository("AppBundle:Provider")
            ->findOneBySlug($slug)
            ;

        //render template
        return $this->render(':Front/Provider/Detail:provider_detail.html.twig', [
            "provider" => $provider
        ]);
    }

}
