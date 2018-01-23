<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProviderSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProviderSearchController extends Controller
{
    /**
     * @Route("/providerSearch", name="providerSearch")
     */
    public function providerSearchAction(Request $request)
    {

        $form = $this->createForm(ProviderSearchType::class);

        $sc = $request->query->get('serviceCategories');
        $n = $request->query->get('name');
        $pc = $request->query->get('postCode');
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $providers = $em->getRepository("AppBundle:Provider")
                ->findProvider($n,$pc,$sc);
                ;

            return $this->render(':Front/Provider/List:provider_list.html.twig', [
                "providers" => $providers
            ]);
        }

        return $this->render(':Front/ProviderSearch:provider_search.html.twig', ['form'=>$form->createView()]);

    }
//        $request = $this->getRequest();
//
//        if($request->getMethod() == 'POST')
//        {
//            $form->bind($request);
//
//            if($form->isValid())
//            {
//                $em = $this->getDoctrine()->getManager();
//                $data = $this->getRequest()->request->get('')
//            }
//
//        }



//    /**
//     *
//     * @Route("/providerResult", name="providerResult")
//     */
//    public function providerResultAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $providers = $em->getRepository("AppBundle:Provider")
//            ->findProvider(array(
//                    "request" => $request
//                )
//        );
//
//        return $this->render(':Front/Provider/List:provider_list.html.twig', [
//            "providers" => $providers
//        ]);
//    }


}
