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
        return $this->json([
            'message' => 'Welcome to your ticket_create!',
            'path' => 'src/Controller/TicketController.php',
        ]);
    }

    /**
     * @Route("/ticket/get", name="ticket_get")
     */
    public function ticket_get()
    {
        return $this->json([
            'message' => 'Welcome to ticket_get!',
            'path' => 'src/Controller/TicketController.php',
        ]);
    }

    /**
     * @Route("/ticket/update", name="ticket_update")
     */
    public function ticket_update()
    {
        return $this->json([
            'message' => 'Welcome to ticket_update!',
            'path' => 'src/Controller/TicketController.php',
        ]);
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
