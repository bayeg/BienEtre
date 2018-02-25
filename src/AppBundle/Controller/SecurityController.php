<?php

namespace AppBundle\Controller;

use AppBundle\Form\InternautType;
use AppBundle\Form\LoginForm;
use AppBundle\Form\ProviderType;
use AppBundle\Form\TempUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TempUser;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{

    /**
     * @Route("/confirm/{token}", name="confirm")
     */
    public function confirmAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $tempUser = $em->getRepository("AppBundle:TempUser")
            ->findOneBy([
                "token" => $token
            ]);

        $type = $tempUser->getType();

        if($type == 'internaut'){
            $form = $this->createForm(InternautType::class);
        }elseif ($type == 'provider'){
            $form = $this->createForm(ProviderType::class);
        }

        return $this->render(':Front/Security/Confirm:confirm.html.twig',[
            'tempUser' => $tempUser,
            'form' => $form->createView()
        ]);

    }


    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class,[
            '_username' => $lastUsername
        ]);

        return $this->render(
            ':Front/Security/Login:login.html.twig',
            array(
            // last username entered by the user
                'form' => $form->createView(),
                'error' => $error,
            )
        );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(){
        throw new \Exception('this should not be reached');
    }

}
