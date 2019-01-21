<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new User();
        $product->setIdUser(3);
        $product->setEmail("rrr");
        $product->setPassword('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new user with id '.$product->getId());
    }


    /**
     * @Route("/user/{id}", name="user_show")
     */
    public function index2($id)
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new User();
        $product->setIdUser(3);
        $product->setEmail($id);
        $product->setPassword('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new user with id '.$product->getId());
    }


    //VISITOR///////////////////////
    /**
     * @Route("/visitor/register", name="visitor_register")
     */
    public function visitor_register()
    {
        return $this->render('visitor_register.html.twig');
    }


    /**
     * @Route("/visitor/connect", name="visitor_connect")
     */
    public function visitor_connect()
    {
        return $this->render('visitor_connect.html.twig');
    }

    //USER///////////////////////////


    /**
     * @Route("/user/unregister", name="user_unregister")
     */
    public function user_unregister()
    {
        return $this->render('user_unregister.html.twig');
    }


    /**
     * @Route("/user/update", name="user_update")
     */
    public function user_update()
    {
        return $this->render('user_update.html.twig');
    }




    //BOB/////////////////


    /**
     * @Route("/bob/update", name="bob_update")
     */
    public function bob_update()
    {
        return $this->render('bob_update.html.twig');
    }


    /**
     * @Route("/bob/consult", name="bob_consult")
     */
    public function bob_consult()
    {
        return $this->render('bob_consult.html.twig');
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
