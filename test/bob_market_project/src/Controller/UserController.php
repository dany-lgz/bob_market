<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\User;
use App\Entity\Building;
use App\Entity\Graphity;
use Symfony\Component\Form;
use App\Form\TicketFormType;
use App\Form\UserFormType;
use App\Form\BuildingFormType;
use App\Form\GraphityFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $login ="";
    private $pwd = "";


    //VISITOR///////////////////////
    /**
     * @Route("/visitor/register", name="visitor_register")
     */
    public function visitor_register(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $email = $form->getData();
            $email = $email->getEmail();
            $password = $form->getData();
            $password = $password->getPassword();

            $this->pwd = $password;
            $this->login = $email;
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('visitor_register.html.twig',array('form' => $form->createView()));
    }


    /**
     * @Route("/visitor/connect", name="visitor_connect")
     */
    public function visitor_connect(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $email = $form->getData();
            $email = $email->getEmail();
            $password = $form->getData();
            $password = $password->getPassword();
            //return new Response($email);
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findBy(array('email'=> $email,'password'=>$password));
            if ($user) {
                $this->pwd = $password;
                $this->login = $email;
                return $this->render('header_user.html.twig');
            }
        }

        return $this->render('visitor_connect.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("/user/disconnect", name="visitor_disconnect")
     */
    public function user_disconnect(Request $request)
    {
        $this->pwd ="";
        $this->login= "";
        $ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('bob');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('header_visitor.html.twig',array('form' => $form->createView()));
    }

    //USER///////////////////////////


    /**
     * @Route("/user/unregister", name="user_unregister")
     */
    public function user_unregister(Request $request)
    {
        $this->pwd ="";
        $this->login= "";
        $ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->pwd ="";
            $this->login= "";
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_unregister.html.twig',array('form' => $form->createView()));
    }


    /**
     * @Route("/user/update", name="user_update")
     */
    public function user_update(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $email = $form->getData();
            $email = $email->getEmail();
            $password = $form->getData();
            $password = $password->getPassword();

            $this->pwd = $password;
            $this->login = $email;
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_update.html.twig',array('form' => $form->createView()));
    }






    //BOB/////////////////


    /**
     * @Route("/bob/update", name="bob_update")
     */
    public function bob_update(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $email = $form->getData();
            $email = $email->getEmail();
            $password = $form->getData();
            $password = $password->getPassword();

            $this->pwd = $password;
            $this->login = $email;
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('/bob');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('bob_update.html.twig',array('form' => $form->createView()));
    }





    //OTHERS///////////////
    /**
     * @Route("/visitor", name="visitor")
     */
    public function visitor()
    {
        //return new Response('NEW Page');
        return $this->render('header_visitor.html.twig');
    }

    /**
     * @Route("/user", name="user")
     */
    public function user()
    {
        //return new Response('NEW Page');
        return $this->render('header_user.html.twig');
    }

    /**
     * @Route("/bob", name="bob")
     */
    public function bob()
    {
        //return new Response('NEW Page');
        return $this->render('header_bob.html.twig');
    }
}
