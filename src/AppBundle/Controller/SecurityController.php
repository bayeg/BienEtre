<?php

namespace AppBundle\Controller;

use AppBundle\Form\SignUpType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/signUp", name="signUp")
     */
    public function signUpAction(Request $request)
    {
        $tempUser = new tempUser();

        $form = $this->createForm(SignUpType::class, $tempUser);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em= $this->getDoctrine()->getManager();
            $em->persist($tempUser);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Go check your inbox !');

            return $this->render(':Front/Security/SignUp:sign_up.html.twig ', array(
            'form' => $form->createView()
        ));
        }
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render(':Front/Security/Login:login.html.twig', array(
            // ...
        ));
    }

}
