<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProviderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Provider;


class ProviderController extends Controller
{
    /**
     * @Route("/provider", name="providerList")
     */
    public function providerListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findAll();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $providers,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)
        );

        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $result,
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
