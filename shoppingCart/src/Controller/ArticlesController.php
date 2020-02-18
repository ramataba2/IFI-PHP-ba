<?php

namespace App\Controller;

use ArticlesList;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ArticlesController extends AbstractController{

    

    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index(){    
        $articles = new ArticlesList();
        return $this->render('articles/index.html.twig');
    }
}