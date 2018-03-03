<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Course;
use AppBundle\Form\CourseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CourseController extends Controller
{

    /**
 * @Route("/courses/new", name="course_new")
 *
 */
    public function newAction(Request $request){

        //create form
        $form = $this->createForm(CourseType::class);

        //handle request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $course = $form->getData();

            $user = $this->getUser();
            $course->setProvider($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            $this->addFlash('success', 'Course created !');

            return $this->redirectToRoute('profile_update');
        }

        //render template
        return $this->render(':Front/Course:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
 * @Route("/courses/{id}/update", name="course_update")
 *
 */
    public function updateAction(Request $request, Course $course){

        //create form
        $form = $this->createForm(CourseType::class, $course);

        //handle request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $course = $form->getData();

            $user = $this->getUser();
            $course->setProvider($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            $this->addFlash('success', 'Course updated !');

            return $this->redirectToRoute('profile_update');
        }

        //render template
        return $this->render(':Front/Course:update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/courses/{id}/delete", name="course_delete")
     *
     */
    public function deleteAction($id){

        //get repo
        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository("AppBundle:Course")
            ->find($id)
        ;

        //handle request
        $em->remove($course);
        $em->flush();

        //render template
        $this->addFlash('success', 'Course deleted !');

        return $this->redirectToRoute('profile_update');

    }

}