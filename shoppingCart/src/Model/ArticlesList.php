<?php
 use Article;

    class ArticlesList{
        private $arrayArticles;

        public function __construct(){
            //on insère 6 articles
            $this->arrayArticles = array();
            $a = new Article();
            $a->setId(0);
            $a->setName("Soblets");
            $a->setDescription("Oignons frits séché");
            $a->setPrice("5€/kg");
            $b = new Article();
            $b->setId(1);
            $b->setName("Ketchah");
            $b->setDescription("Poisson salé séché");
            $b->setPrice("20€/kg");
            $c = new Article();
            $c->setId(2);
            $c->setName("Pagnes");
            $c->setDescription("Palourde épluchée et nettoyée");
            $c->setPrice("2€/kg");
            $d = new Article();
            $d->setId(3);
            $d->setName("Nettetou");
            $d->setDescription("Ça n'existe pas en français, mais c'est une épice molle");
            $d->setPrice("100€/kg");
            $e = new Article();
            $e->setId(4);
            $e->setName("Nokkoss");
            $e->setDescription("Mélange composé d'ail, de poivrons, d'oignons, de poivre, de sel, de bouillon, beaucoup de piment");
            $e->setPrice("50€/kg");
            $f = new Article();
            $f->setId(5);
            $f->setName("Beuggeuthie");
            $f->setDescription("Feuille d'oseille verte laissé cuire à bain marie");
            $f->setPrice("7€/kg");
            array_push($this->arrayArticles, $a, $b, $c, $d, $e, $f);
        }

        public function getArticles(){
            return $this->arrayArticles;
        }

        public function getArticle($id = -1){
            if($id >= 0 && $id < 6){
                return $this->arrayArticles[$id];
            }

            $a = new Article();
            $a->setId(-1);
            $a->setName("Aucun article de ce type retrouvé");
            $a->setDescription("Inexistant");
            $a->setPrice("Pas de prix pour l'inconnu");

            return $a;
        }
        
            
        
    }