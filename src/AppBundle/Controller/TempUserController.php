<?php

namespace AppBundle\Controller;

use AppBundle\Form\LoginForm;
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
        //build form
        $tempUser = new TempUser();
        $form = $this->createForm(TempUserType::class, $tempUser);

        //handle request if POST
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
//            $request->getSession()->getFlashBag()->add('notice', 'Go check your inbox !');

            //MAILER
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

            return $this->redirectToRoute('home',array(
                //
            ));

        }


//        $form = $this->createForm(TempUserType::class);

//        $form->handleRequest($request);

//        if($form->isValid()){

            // USER CREATION
//            /** @var TempUser $tempUser */
//            $tempUser = $form->getData();
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($tempUser);
//            $em->flush();

        return $this->render(':Front/Security/SignUp:sign_up.html.twig',array(
            'form'=> $form->createView()
        ));

    }

}