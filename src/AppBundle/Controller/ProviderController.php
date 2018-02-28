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
     * @Route("/provider", name="provider_list")
     */
    public function providerListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findAllNotBannedOrderedByName();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $providers,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',8)
        );

        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $result,
        ]);
    }

//<?php
//// Depuis un contrôleur
//    public function listAction()
//    {
//        $listAdverts = $this
//            ->getDoctrine()
//            ->getManager()
//            ->getRepository('OCPlatformBundle:Advert')
//            ->getAdvertWithApplications()
//        ;
//
//        foreach ($listAdverts as $advert) {
//            // Ne déclenche pas de requête : les candidatures sont déjà chargées !
//            // Vous pourriez faire une boucle dessus pour les afficher toutes
//            $advert->getApplications();
//        }
//
//        // …
//    }


    /**
     * @Route("/provider/{slug}", name="provider_detail")
     */
    public function providerDetailAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $provider = $em->getRepository("AppBundle:Provider")
            ->findOneBySlug($slug)
            ;

        return $this->render(':Front/Provider/Detail:provider_detail.html.twig', [
            "provider" => $provider
        ]);
    }

}
