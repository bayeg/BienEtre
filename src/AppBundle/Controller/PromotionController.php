<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PromotionController extends Controller
{
    /**
     * @Route("/promotionList")
     */
    public function promotionListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $promotions = $em->getRepository("AppBundle:Promotion")
            ->findAll();
        return $this->render('AppBundle:Promotion:promotion_list.html.twig', [
            "promotions" => $promotions
            ]
        );
    }

}
