<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Internaut;
use AppBundle\Entity\Provider;
use AppBundle\Form\InternautType;
use AppBundle\Form\ProviderType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Service\FileUploader;

class UserController extends Controller
{
    /**
     * @Route("profile/update", name="profile_update")
     */
    function editAction(Request $request, FileUploader $fileUploader)
    {
        //get repo
        $user = $this->getUser();
        $type = $user->getMyUserType();

        $em = $this->getDoctrine()->getManager();

        //create form
        if ($type === 'internaut') {
            $form = $this->createForm(InternautType::class, $user);
            $template = ':Front/Profile:profile_internaut.html.twig';
        }elseif ($type === 'provider'){
            $form = $this->createForm(ProviderType::class, $user);
            $template = ':Front/Profile:profile_provider.html.twig';
        } else {
            return $this->render(':Front/Home:home.html.twig');
        }

        //handle request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            //handle image
            $file = $user->getImage();
            $fileName = $fileUploader->upload($file);
            $user->setImage($fileName);

            //create user
            $em->persist($user);
            $em->flush();

            //render template if post
            $this->addFlash('success', 'Profile updated !');
            return $this->redirectToRoute('home');
        }

        //render template if no post
        return $this->render($view = $template, [
            'form' => $form->createView(),
            'user' => $user
        ]);

    }

}