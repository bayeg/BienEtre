<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
//    //////////////OUI !!!!!! METTRE DS USER SOUS createAction !!!!!!!!!
//    /**
//     * @Route("/confirm/{token}", name="confirm")
//     */
//    public function confirmAction(Request $request, $token)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $tempUser = $em->getRepository("AppBundle:TempUser")
////            ->fkOneBy(
////               k
////                "token" => $token
////            ]
//            ->findOneByToken($token);
//
//        $type = $tempUser->getType();
//
//        $email = $tempUser->getEmail();
//        $password = $tempUser->getPassword();
//        $registrationDate = $tempUser->getRegistrationDate();
//
//        if ($type === 'internaut') {
//            $user = new Internaut();
//            $user->setMyUserType($type);
//            $form = $this->createForm(InternautType::class, $user);
//            $template = ':Front/Security/Profile:profile_internaut.html.twig';
//        }elseif ($type === 'provider'){
//            $user = new Provider();
//            $user->setMyUserType($type);
//            $form = $this->createForm(ProviderType::class, $user);
//            $template = ':Front/Security/Profile:profile_provider.html.twig';
//        } else {
//            return $this->render(':Front/Home:home.html.twig');
//        }
//
//        $user->setEmail($email);
//        $user->setPassword($password);
//        $user->setRegistrationDate($registrationDate);
//        $user->setLoginAttempts(0);
//        $user->setBanned(false);
//        $user->setRegistrationConfirmed(true);
//
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $user = $form->getData();
//
//            $em = $this->getDoctrine()->getManager();
//
//            $em->persist($user);
//            $em->remove($tempUser);
//
//            $em->flush();
//
//            return $this->redirectToRoute('login');
//        }
//
//        return $this->render($view = $template, [
//            'form' => $form->createView()
//        ]);
//
//    }

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
