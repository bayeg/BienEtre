<?php

namespace AppBundle\Controller;

use AppBundle\Form\TempUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TempUser;

class SecurityController extends Controller
{
    /**
     * @Route("/signUp", name="signUp")
     */
    public function signUpAction(Request $request)
    {

        $form = $this->createForm(TempUserType::class);

        $form->handleRequest($request);

        if($form->isValid()){

            // USER CREATION
            /** @var TempUser $tempUser */
            $tempUser = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tempUser);
            $em->flush();

            $this->addFlash('success','Go check your mailbox !');
//            $request->getSession()->getFlashBag()->add('notice', 'Go check your inbox !');


            //MAILER
            $to = $tempUser->getEmail();
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('no-reply@bien-etre.be')
//                ->setTo('091bdfdbbe-a7b357@inbox.mailtrap.io')
                ->setTo($to)
                ->setBody('Message Body')
//                ->setBody(
//                    $this->renderView(
//                        'HelloBundle:Hello:email.txt.twig',
//                        array('name' => $name)
//                    ))
            ;
            $this->get('mailer')->send($message);

            return $this->redirectToRoute('home',array(
                //
            ));


        }

        return $this->render(':Front/Security/SignUp:sign_up.html.twig',array(
            'form'=> $form->createView()
        ));


//        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
//            $em= $this->getDoctrine()->getManager();
//            $em->persist($tempUser);
//            $em->flush();
//
//            $request->getSession()->getFlashBag()->add('notice', 'Go check your inbox !');
//
//            return $this->render(':Front/Security/SignUp:sign_up.html.twig ', array(
//            'form' => $form->createView()
//        ));
//        }
//
//        return $this->render(':Front/Security/SignUp:sign_up.html.twig ', array(
//            'form' => $form->createView()
//        ));
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
