<?php

namespace App\Controller;

use ArticlesList;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ArticlesController extends AbstractController{

    private $articles;

    /**
     * @Route("/", name="articles_list")
     * @Method({"GET"})
     */
    public function index(){    
        $this->articles = new ArticlesList();
        return $this->render('articles/index.html.twig', array('articles' => $this->articles->getArticles()));
    }

    /**
     * @Route("/article/{id}", name="articles_details")
     */
    public function detail($id){
        $this->articles = new ArticlesList();
        $verif = htmlspecialchars($id);
        if(is_numeric($verif)){
        return $this->render('articles/details.html.twig', array('article' => $this->articles->getArticle($verif)));
        }
        return $this->render('articles/error.html.twig');
    }
    
}