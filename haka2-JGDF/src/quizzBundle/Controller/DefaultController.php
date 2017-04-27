<?php

namespace quizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cates = $em->getRepository('quizzBundle:Category')->findAll();

        return $this->render('quizzBundle:Default:index.html.twig',
                                ['cate' => $cates]);
    }



}
