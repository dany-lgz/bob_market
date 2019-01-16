<?php
namespace App\Controller;


use App\Entity\Tag;
use App\Form\TagType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    
    /**
     * Search a tag with his Id
     * 
     * @Route("/tagpage", name="tag_list")
     */
    public function show($id_tag)
    {
        $val = $this->getDoctrine()->getEntityManager();
        $res = $this->getRepository(Tag::class)->find($id_tag);
        if (!$res) {
            throw $this->createNotFoundException(
                'No tag found'
            );
        }
        return $this->render('tagpage.html.twig', [
            'tag' => $res]);  
    }

    /**
     * List all the tag
     * 
     * @Route("/taglist", name="tag_list")
     */
    public function list()
    {
        $tags = $this->getDoctrine()->getRepository(Tag::class)->findAll();
            
        if (!$tags) {
            throw $this->createNotFoundException(
                'No tag found'
            );
        }
        return $this->render(
            'taglist.html.twig',
            [ 'tags'=> $tags ]
        );
    }

    /**
     * Function called by the request form to remove the tag
     * 
     * @Route("/newtag", name="tag_added")
     */
    public function newtag(Request $request)
    {
        $tag = new Tag();
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tag);
            $entityManager->flush();

            return $this->redirectToRoute('app_Home_Page');
        }
        return $this->render(
            'newtag.html.twig',
            array('form' => $form->createView())
        );
    }

    public function dashboard(){
        return $this->render('dashboard.html.twig');
    }
}