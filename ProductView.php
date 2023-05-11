<?php
//Exercice 5

class ProductView {
    public function render($view, $data = []) {
      // Extraire les données de $data pour les utiliser dans la vue
      extract($data);
  
      // Afficher la vue
      require_once 'views/products/' . $view . '.php';
    }
  }

?>