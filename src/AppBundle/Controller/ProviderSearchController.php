<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProviderSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProviderSearchController extends Controller
{
    /**
     * @Route(name="provider_search")
     */
    public function providerSearchDisplayAction()
    {
        $form = $this->createForm(ProviderSearchType::class);
        return $this->render('Front/ProviderSearch/provider_search.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/provider-result", name="provider_result")
     */
    public function providerResultAction(Request $request)
    {

        $n = $request->query->get('name');
        $pc = $request->query->get('postCode');
        $sc = $request->query->get('serviceCategories');

        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findProvider($n,$pc,$sc);


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


}
