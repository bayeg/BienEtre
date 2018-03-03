<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ServiceCategoryController extends Controller
{
    /**
     * @Route("/categories", name="service_category_list")
     */
    public function serviceCategoryListAction(Request $request)
    {
        //get repo
        $em = $this->getDoctrine()->getManager();
        $serviceCategories = $em->getRepository("AppBundle:ServiceCategory")
            ->findAllValidOrderedByName();

        //pagination service
        $kpnGenerator = $this->get('app.knp_paginator_generator');
        $serviceCategories = $kpnGenerator->generate($serviceCategories, 1, 3, $request);

        //render template
        return $this->render('Front/ServiceCategory/List/main_service_category_list.html.twig', [
            "serviceCategories" => $serviceCategories,
        ]);

    }

    /**
     * @Route("/categories/{slug}", name="service_category_detail")
     */
    public function serviceCategoryDetailAction($slug)
    {
        //get repo
        $em = $this->getDoctrine()->getManager();
        $serviceCategory = $em->getRepository("AppBundle:ServiceCategory")
            ->findOneBySlug($slug);

        //render template
        return $this->render('Front/ServiceCategory/Detail/main_service_category_detail.html.twig', [
            "serviceCategory" => $serviceCategory
        ]);
    }

}
