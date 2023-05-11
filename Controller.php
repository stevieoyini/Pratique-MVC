<?php
//Exercice 5

class Controller {
    // Méthode par défaut pour afficher une vue
    public function view($view, $data = []) {
      // Convertir le tableau associatif de données en variables locales
      extract($data);
  
      // Inclure le fichier de vue
      include 'views/' . $view . '.php';
    }


    public function isLoggedIn() {
      // Vérifier si la variable de session "user_id" existe et n'est pas vide
      return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
  }
  }

?>