<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProviderSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProviderSearchController extends Controller
{
    /**
     * @Route(name="providerSearch")
     */
    public function providerSearchDisplayAction()
    {

        $form = $this->createForm(ProviderSearchType::class);
        return $this->render(':Front/ProviderSearch:provider_search.html.twig', ['form' => $form->createView()]);

    }

    /**
     *
     * @Route("/providerResult", name="providerResult")
     */
    public function providerResultAction(Request $request)
    {

        $n = $request->query->get('name');
        $pc = $request->query->get('postCode');
        $sc = $request->query->get('serviceCategories');

        $em = $this->getDoctrine()->getManager();
        $providers = $em->getRepository("AppBundle:Provider")
            ->findProvider($n,$pc,$sc);

        return $this->render(':Front/Provider/List:provider_list.html.twig', [
            "providers" => $providers
        ]);

    }


}
