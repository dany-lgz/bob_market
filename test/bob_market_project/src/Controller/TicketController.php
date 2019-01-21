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
        return $this->json([
            'message' => 'Welcome to ticket_delete!',
            'path' => 'src/Controller/TicketController.php',
        ]);
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
}
