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

        return $this->render('Front/ServiceCategory/service_category_list.html.twig',[
            "serviceCategories" => $serviceCategories
        ]);
    }

    /**
     * @Route("/category/{name}", name="serviceCategoryDetail")
     */
    public function serviceCategoryDetailAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $serviceCategory = $em->getRepository("AppBundle:ServiceCategory")
            ->findOneBy(array(
                "name" => $name
                )
            );

        return $this->render('Front/ServiceCategory/service_category_detail.html.twig', [
            "serviceCategory" => $serviceCategory
        ]);
    }

}
