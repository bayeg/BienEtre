<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Internaut;
use AppBundle\Entity\Provider;
use AppBundle\Form\InternautType;
use AppBundle\Form\ProviderType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("profile/update", name="profile_update")
     */
    function editAction(Request $request)
    {
//        $id = $this->getUser()->getId();
//
//        $em = $this->getDoctrine()->getManager();
//        $user = $em->getRepository("AppBundle:Internaut")
//            ->findOneById($id);
//
//        ;

//        $user->addRole('ROLE_ADMIN');

        $user = $this->getUser();

        $type = $user->getMyUserType();

        if ($type === 'internaut') {
            $form = $this->createForm(InternautType::class, $user);
            $template = ':Front/Profile:profile_internaut.html.twig';
        }elseif ($type === 'provider'){
            $form = $this->createForm(ProviderType::class, $user);
            $template = ':Front/Profile:profile_provider.html.twig';
        } else {
            return $this->render(':Front/Home:home.html.twig');
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Profile updated !');

            return $this->redirectToRoute('home');
        }

        return $this->render($view = $template, [
            'form' => $form->createView(),
            'user' => $user
        ]);

    }

}