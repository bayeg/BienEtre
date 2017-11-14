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

        return $this->render('ServiceCategory/service_category_list.html.twig',[
            "serviceCategories" => $serviceCategories
        ]);
    }

    /**
     * @Route("/category/{id}", name="serviceCategoryDetail")
     */
    public function serviceCategoryDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $serviceCategory = $em->getRepository("AppBundle:ServiceCategory")
            ->find($id);

        return $this->render('ServiceCategory/service_category_detail.html.twig', [
            "sc" => $serviceCategory
        ]);
    }

}
