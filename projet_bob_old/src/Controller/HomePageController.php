<?php
/**
 * Created by PhpStorm.
 * User: valen
 * Date: 17/12/2018
 * Time: 18:55
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomePageController extends AbstractController
{
    /**
     * @Route("/homepage")
     */
    public function homepage()
    {
        //return new Response('NEW Page');
        return $this->render('HomePage.html.twig');
    }
}