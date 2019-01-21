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

class TicketController extends AbstractController
{

    //VISITOR////////////////

    /**
     * @Route("/visitor/consult", name="visitor_consult")
     */
    public function visitor_consult(Request $request)
    {

        /*$ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $id = $form->getData();
            $id = $id->getIdTicket  ();
            $ticket = $this->getDoctrine()->getRepository(Ticket::class)->find($id);
            if (!$ticket)
                throw $this->createNotFoundException('Not found');
            return $this->render(
                'visitor_consult.html.twig',
                ['form' => $ticket]
            );
        }
        return $this->render('visitor_consult.html.twig',array('form' => $form->createView()));*/

        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->findAll();
        if (!$ticket)
            throw $this->createNotFoundException('Not found');
        return $this->render(
            'visitor_consult.html.twig',
            [ 'ticket'=> $ticket ]
        );
        return $this->render('visitor_consult.html.twig');
    }


    //USER///////////
    /**
     * @Route("/user/consult", name="user_consult")
     */
    public function user_consult()
    {
        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->findAll();
        if (!$ticket)
            throw $this->createNotFoundException('Not found');
        return $this->render(
            'user_consult.html.twig',
            [ 'ticket'=> $ticket ]
        );
        return $this->render('user_consult.html.twig');
    }

    /**
     * @Route("/user/ask", name="user_ask")
     */
    public function user_ask(Request $request)
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_ask.html.twig',array('form' => $form->createView()));
    }
    /**
     * @Route("/user/askb", name="user_askb")
     */
    public function user_askb(Request $request)
    {
        $ticket = new Building();
        $form = $this->createForm(BuildingFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_askb.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("/user/askg", name="user_askg")
     */
    public function user_askg(Request $request)
    {
        $ticket = new Graphity();
        $form = $this->createForm(GraphityFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_askg.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("/user/askagain", name="user_askagain")
     */
    public function user_askagain(Request $request)
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_askagain.html.twig',array('form' => $form->createView()));
    }


    /**
     * @Route("/user/accept", name="user_accept")
     */
    public function user_accept(Request $request)
    {$ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_accept.html.twig',array('form' => $form->createView()));
    }


    /**
     * @Route("/user/refuse", name="user_refuse")
     */
    public function user_refuse(Request $request)
    {$ticket = new Ticket();
        $form = $this->createForm(TicketFormType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            return $this->redirectToRoute('user');
            //return $this->json(['message' => 'Message envoyé !', 'path' => 'header_user']);
        }// return $this->redirectToRoute('header_user');
        return $this->render('user_refuse.html.twig',array('form' => $form->createView()));
    }

    //BOB/////////////
    /**
     * @Route("/bob/accept", name="bob_accept")
     */
    public function bob_accept(Request $request)
    {
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
        return $this->render('bob_accept.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("/bob/refuse", name="bob_refuse")
     */
    public function bob_refuse(Request $request)
    {
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
        return $this->render('bob_refuse.html.twig',array('form' => $form->createView()));
    }


    /**
     * @Route("/bob/consult", name="bob_consult")
     */
    public function bob_consult(Request $request)
    {
        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->findAll();
        if (!$ticket)
            throw $this->createNotFoundException('Not found');
        return $this->render(
            'bob_consult.html.twig',
            [ 'ticket'=> $ticket ]
        );
        return $this->render('bob_consult.html.twig');
    }

}
