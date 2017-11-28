<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ServiceCategoryController extends Controller
{
    /**
     * @Route("/category", name="serviceCategoryList")
     */
    public function serviceCategoryListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serviceCategories = $em->getRepository("AppBundle:ServiceCategory")
            ->findAll();

        return $this->render('Front/ServiceCategory/List/main_service_category_list.html.twig',[
            "serviceCategories" => $serviceCategories
        ]);
    }

    /**
     * @Route("/category/{slug}", name="serviceCategoryDetail")
     */
    public function serviceCategoryDetailAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $serviceCategory = $em->getRepository("AppBundle:ServiceCategory")
            ->findOneBy(array(
                "slug" => $slug
                )
            );

        return $this->render('Front/ServiceCategory/Detail/main_service_category_detail.html.twig', [
            "serviceCategory" => $serviceCategory
        ]);
    }

}
