<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Promotion;
use AppBundle\Form\PromotionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PromotionController extends Controller
{

    /**
     * @Route("/promotions/new", name="promotion_new")
     *
     */
    public function newAction(Request $request){

        $form = $this->createForm(PromotionType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotion = $form->getData();

            $user = $this->getUser();
            $promotion->setProvider($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();

            $this->addFlash('success', 'Promotion created !');

            return $this->redirectToRoute('profile_update');
        }

        return $this->render(':Front/Promotion:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/promotions/{id}/update", name="promotion_update")
     *
     */
    public function updateAction(Request $request, Promotion $promotion){

        $form = $this->createForm(PromotionType::class, $promotion);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotion = $form->getData();

            $user = $this->getUser();
            $promotion->setProvider($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();

            $this->addFlash('success', 'Promotion updated !');

            return $this->redirectToRoute('profile_update');
        }

        return $this->render(':Front/Promotion:update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/promotions/{id}/delete", name="promotion_delete")
     *
     */
    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $promotion = $em->getRepository("AppBundle:Promotion")
            ->find($id)
        ;

        $em->remove($promotion);

        $em->flush();

        $this->addFlash('success', 'Promotion deleted !');

        return $this->redirectToRoute('profile_update');

    }


}
