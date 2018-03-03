<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Internaut;
use AppBundle\Entity\Provider;
use AppBundle\Form\InternautType;
use AppBundle\Form\LoginForm;
use AppBundle\Form\ProviderType;
use AppBundle\Form\TempUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TempUser;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class TempUserController extends Controller
{
    /**
     * @Route("/sign-up", name="sign_up")
     */
    public function signUpAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        //create form
        $tempUser = new TempUser();
        $form = $this->createForm(TempUserType::class, $tempUser);

        //handle request if post
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //encode password
            $password = $passwordEncoder->encodePassword($tempUser, $tempUser->getPlainPassword());
            $tempUser->setPassword($password);

            //save tempUser
            $em = $this->getDoctrine()->getManager();
            $em->persist($tempUser);
            $em->flush();

            $this->addFlash('success','Go check your mailbox !');

            //mailer
            $to = $tempUser->getEmail();
            $token = $tempUser->getToken();
            $message = \Swift_Message::newInstance()
                ->setSubject('Welcome to bien-etre.be')
                ->setFrom('no-reply@bien-etre.be')
                ->setTo($to)
                ->setBody(
                    $this->renderView(
                        ':Front/Security/SignUp:confirm_email.html.twig',array(
                            'token' => $token
                        )
                    ),
                    'text/html'
                )
            ;
            $this->get('mailer')->send($message);

            //render template if post
            return $this->redirectToRoute('home');

        }

        //render template if no post
        return $this->render(':Front/Security/SignUp:sign_up.html.twig',array(
            'form'=> $form->createView()
        ));

    }

    /**
     * @Route("/confirm/{token}", name="confirm")
     */
    public function confirmAction(Request $request, $token)
    {
        //get repo
        $em = $this->getDoctrine()->getManager();
        $tempUser = $em->getRepository("AppBundle:TempUser")
            ->findOneByToken($token);

        $type = $tempUser->getType();
        $email = $tempUser->getEmail();
        $password = $tempUser->getPassword();
        $registrationDate = $tempUser->getRegistrationDate();

        if ($type === 'internaut') {
            $user = new Internaut();
            $form = $this->createForm(InternautType::class, $user);
            $template = ':Front/Profile:profile_internaut.html.twig';
        }elseif ($type === 'provider'){
            $user = new Provider();
            $form = $this->createForm(ProviderType::class, $user);
            $template = ':Front/Profile:profile_provider.html.twig';
        }

        $user->setEmail($email);
        $user->setPassword($password);
        $user->setRegistrationDate($registrationDate);
        $user->setLoginAttempts(0);
        $user->setBanned(false);
        $user->setRegistrationConfirmed(true);

        //handle request if post
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //create user
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);

            //delete tempUser
            $em->remove($tempUser);

            $em->flush();

            //render template if post
            return $this->redirectToRoute('login');
        }

        //render template if no post
        return $this->render($view = $template, [
            'form' => $form->createView(),
            'user' => $user
        ]);

    }

}