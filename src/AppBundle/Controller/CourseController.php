<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Course;
use AppBundle\Form\CourseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CourseController extends Controller
{
//    public function listAction($id){
//        $em = $this->getDoctrine()->getManager();
//        $courses = $em->getRepository("AppBundle:Course")
//            ->findByProvider($id);
//
//        return $this->render(':Front/Profile/List:profile_provider.html.twig', [
//            "courses" => $courses,
//        ]);
//
//    }

    /**
 * @Route("/courses/new", name="course_new")
 *
 */
    public function newAction(Request $request){

        $form = $this->createForm(CourseType::class);

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

        return $this->render(':Front/Course:new_course.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/courses/{id}/update", name="course_update")
     *
     */
    public function updateAction(Request $request, Course $course){

        $form = $this->createForm(CourseType::class, $course);

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

        return $this->render(':Front/Course:update_course.html.twig', [
            'form' => $form->createView()
        ]);
    }

}