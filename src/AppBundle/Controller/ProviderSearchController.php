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
        //create form
        $form = $this->createForm(ProviderSearchType::class);

        //render template
        return $this->render('Front/ProviderSearch/provider_search.html.twig', [
            'form' => $form->createView()
            ]
        );
    }
    /**
     * @Route("/providers-result", name="provider_result")
     */
    public function providerSearchResultAction(Request $request)
    {
        //get query
        $n = $request->query->get('name');
        $pc = $request->query->get('postCode');
        $sc = $request->query->get('serviceCategories');

        //get repo
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findProvider($n,$pc,$sc);

        //pagination service
        $kpnGenerator = $this->get('app.knp_paginator_generator');
        $providers = $kpnGenerator->generate($providers, 1, 8, $request);

        //render template
        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $providers,
        ]);
    }
}