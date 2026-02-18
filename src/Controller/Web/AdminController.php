<?php

namespace App\Controller;

use App\Entity\Course;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    // =============== HANDLE THE COURSES =============== //

    // List of the courses
    #[Route('/admin/courses', name: 'admin_courses_list')]
    public function listCourses(EntityManagerInterface $em)
    {
        $courses = $em->getRepository(Course::class)->findAll();

        return $this->render('admin/courses/list.html.twig', [
            'courses' => $courses,
        ]);
    }

    // Create a new course
    #[Route('/admin/courses/new', name: 'admin_courses_new', methods: ['GET', 'POST'])]
    public function newCourse(Request $request, EntityManagerInterface $em): Response
    {
        if($request->isMethod('POST')) {
            $course = new Course();
            $course->setName($request->request->get('name'));
            $course->setDescription($request->request->get('description'));
            $course->setDuration((int) $request->request->get('duration'));
            $course->setMaxParticipants((int) $request->request->get('maxParticipants'));
            $course->setPrice($request->request->get('price'));
            $course->setIsActive($request->request->get('isActive') === '1');
            $course->setCreatedAt(new \DateTimeImmutable());

            $em->persist($course);
            $em->flush();

            $this->addFlash('success', 'Cours crée avec succès !');
            return $this->redirectToRoute('admin_courses_list');
        }

        return $this->render('admin/courses/form.html.twig', [
            'course' => null,
        ]);
    }
}
