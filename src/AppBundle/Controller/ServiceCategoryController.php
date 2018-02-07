<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ServiceCategoryController extends Controller
{
    /**
     * @Route("/category", name="serviceCategoryList")
     */
    public function serviceCategoryListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $serviceCategories = $em->getRepository("AppBundle:ServiceCategory")
            ->findAll();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $serviceCategories,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',3)
        );

        return $this->render('Front/ServiceCategory/List/main_service_category_list.html.twig', [
            "serviceCategories" => $result,
        ]);


    }

    /**
     * @Route("/category/{slug}", name="serviceCategoryDetail")
     */
    public function serviceCategoryDetailAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $serviceCategory = $em->getRepository("AppBundle:ServiceCategory")
//            ->findOneBy(array(
//                "slug" => $slug
//                ));
        ->myFindOne($slug);


        return $this->render('Front/ServiceCategory/Detail/main_service_category_detail.html.twig', [
            "serviceCategory" => $serviceCategory
        ]);
    }

}
