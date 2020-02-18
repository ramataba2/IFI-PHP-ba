<?php 

class Article{

    private $id;
    private $name;
    private $description;
    private $price;

    public function getId(){
        return $this->id;
    }

    public function setId($ident){
        $this->id = $ident;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

}