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
     * @Route("/provider", name="providerList")
     */
    public function providerListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findAll();

        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $providers
        ]);
    }

    /**
     * @Route("/provider/{slug}", name="providerDetail")
     */
    public function providerDetailAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $provider = $em->getRepository("AppBundle:Provider")
            ->findOneBy(array(
                    "slug" => $slug
                )
            );

        return $this->render(':Front/Provider/Detail:provider_detail.html.twig', [
            "provider" => $provider
        ]);
    }

//    /**
//     * @param Request
//     * @Route("/s", name="s")
//     */
//    public function addAction(Request $request)
//    {
//
//        $provider = new Provider();
//        $form = $this->createForm(ProviderType::class,$provider);
//
//        if ($request->isMethod('POST')&& $form->handleRequest($request)->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($provider);
//            $em->flush();
//
//            $request->getSession()->getFlashBag()->add('notice', 'Provider bien enregistré');
//
//            return $this->redirectToRoute('providerDetail', array(
//                'id' => getId()));
//        }
//
//        return $this->render(':Front/Provider:search_form.html.twig', array(
//            'form' => $form->createView(),
//        ));
//    }

}
