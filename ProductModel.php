<?php

class ProductModel {

    // propriétés de la classe pour stocker les données du produit
    private $id;
    private $name;
    private $price;
    private $products = array(); // propriété pour stocker la liste de produits

    public function __construct() {
        // initialisation de la liste de produits dans le constructeur
        $this->products = array(
            array('id' => 1, 'name' => 'Produit 1', 'price' => 10),
            array('id' => 2, 'name' => 'Produit 2', 'price' => 20),
            array('id' => 3, 'name' => 'Produit 3', 'price' => 30)
        );
    }

    // méthode pour récupérer une liste de produits
    public function getProducts() {
        return $this->products; // retourner la liste de produits stockée dans la propriété
    }

    public function save($data) {
        // implémenter la logique de sauvegarde ici
        $result = "Données utilisateur sauvegardées avec succès";
        return $result;
    }

    // méthodes pour accéder aux propriétés de la classe (getters et setters)
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

}

?>