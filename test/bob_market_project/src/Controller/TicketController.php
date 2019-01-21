<?php

namespace App\Controller;

use App\Entity\Ticket;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TicketController extends AbstractController
{
    /**
     * @Route("/ticket", name="ticket")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TicketController.php',
        ]);
    }

    /**
     * @Route("/ticket/create", name="ticket_create")
     */
    public function ticket_create()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $ticket = new Ticket();
        $ticket->setIdTicket(3);
        $ticket->setIdUser(3);
        $ticket->setChecked(true);
        $ticket->setValidated(true);
        $entityManager->persist($ticket);
        $entityManager->flush();
        return new Response('ticket new user with id '.$ticket->getId());
    }

    /**
     * @Route("/ticket/get/{id}", name="ticket_get")
     */
    public function ticket_get($id)
    {
        $ticket = $this->getDoctrine($id)->getRepository(Ticket::class)->find($id);
        if (!$ticket)
            throw $this->createNotFoundException('No ticket found for id '.$id);
        return new Response($ticket->getId());
    }

    /**
     * @Route("/ticket/update", name="ticket_update")
     */
    public function ticket_update()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/ticket/delete", name="ticket_delete")
     */
    public function ticket_delete()
    {
        return $this->render('register.html.twig');
    }

    /**
     * @Route("/ticket/list", name="ticket_list")
     */
    public function ticket_list()
    {
        return $this->json([
            'message' => 'Welcome to ticket_list!',
            'path' => 'src/Controller/TicketController.php',
        ]);
    }

    //VISITOR////////////////

    /**
     * @Route("/visitor/consult", name="visitor_consult")
     */
    public function visitor_consult()
    {
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
        return $this->render('user_consult.html.twig');
    }

    /**
     * @Route("/user/ask", name="user_ask")
     */
    public function user_ask()
    {
        return $this->render('user_ask.html.twig');
    }


    /**
     * @Route("/user/askagain", name="user_askagain")
     */
    public function user_askagain()
    {
        return $this->render('user_askagain.html.twig');
    }


    /**
     * @Route("/user/accept", name="user_accept")
     */
    public function user_accept()
    {
        return $this->render('user_accept.html.twig');
    }


    /**
     * @Route("/user/refuse", name="user_refuse")
     */
    public function user_refuse()
    {
        return $this->render('user_refuse.html.twig');
    }

    //BOB/////////////


    /**
     * @Route("/bob/accept", name="bob_accept")
     */
    public function bob_accept()
    {
        return $this->render('bob_accept.html.twig');
    }


    /**
     * @Route("/bob/refuse", name="bob_refuse")
     */
    public function bob_refuse()
    {
        return $this->render('bob_refuse.html.twig');
    }

}
