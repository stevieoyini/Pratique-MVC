<?php

//Exercice 3: Création d'une vue

require_once 'UserModel.php';

//nous avons créé une classe nommée "UserView" dans le fichier "UserView.php".
class UserView {

//Nous avons ajouté une méthode publique à la classe UserView : "display".
  public function display() {
    // La méthode "display" instancie d'abord le modèle utilisateur (classe UserModel).
    $user_model = new UserModel();

    // Récupérer le nom d'utilisateur stocké dans le modèle utilisateur
    $username = $user_model->getUsername();

    // Afficher les informations utilisateur
    echo $username;
  }
}

?>