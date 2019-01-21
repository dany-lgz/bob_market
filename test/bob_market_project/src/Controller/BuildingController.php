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

class BuildingController extends AbstractController
{
    /**
     * @Route("/building", name="building")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BuildingController.php',
        ]);
    }
}
