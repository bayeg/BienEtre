<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Internaut;
use AppBundle\Entity\Provider;
use AppBundle\Entity\User;
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
    public function confirmAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $tempUser = $em->getRepository("AppBundle:TempUser")
            ->findOneBy([
                "token" => $token
            ]);

        $type = $tempUser->getType();

        $email = $tempUser->getEmail();
        $password = $tempUser->getPassword();
        $registrationDate = $tempUser->getRegistrationDate();

        if ($type === 'internaut') {

            $user = new Internaut();
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setRegistrationDate($registrationDate);
            $user->setLoginAttempts(0);
            $user->setBanned(false);
            $user->setRegistrationConfirmed(true);


            $form = $this->createForm(InternautType::class, $user);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                //A MODIFIER
                return $this->render(':Front/Contact:contact.html.twig');
            }

            return $this->render(':Front/Security/Confirm:confirm_internaut.html.twig', [
                ////tempUser et User TO REMOVE
                'tempUser' => $tempUser,
                'user' => $user,
                'form' => $form->createView()
            ]);

        } elseif ($type === 'provider') {
            $user = new Provider();
            $form = $this->createForm(ProviderType::class);
            return $this->render(':Front/Security/Confirm:confirm_provider.html.twig', [
                ////tempUser et User TO REMOVE
                'tempUser' => $tempUser,
                'user' => $user,
                'form' => $form->createView()
            ]);

        }
//        else {
//            return $this->render(':Front/Home:home.html.twig');
//        }





    }


    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render(':Front/Security/Login:login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));


////        $authenticationUtils = $this->get('security.authentication_utils');
//
//        // get the login error if there is one
//        $error = $authUtils->getLastAuthenticationError();
//
//        // last username entered by the user
//        $lastUsername = $authUtils->getLastUsername();
//
//        $form = $this->createForm(LoginForm::class, [
//            '_username' => $lastUsername
//        ]);
//
//        return $this->render(
//            ':Front/Security/Login:login.html.twig',
//            array(
//                // last username entered by the user
//                'form' => $form->createView(),
//                'last_username' => $lastUsername,
//                'error' => $error,
//            )
//        );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        throw new \Exception('this should not be reached');
    }

}
