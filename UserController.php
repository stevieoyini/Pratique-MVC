<?php
//Exercie 2: Création d'un contrôleur
require_once 'UserModel.php';

//nous avons créé une classe nommée "UserController" dans le fichier "UserController.php
class UserController {

  //nous avons créé une classe nommée "UserController" dans le fichier "UserController.php
  public function register() {
    // La méthode "register" affiche un formulaire d'inscription pour l'utilisateur. Lorsque l'utilisateur soumet ce formulaire, il sera redirigé vers la méthode "processRegistration".
    echo "<form action='index.php?action=processRegistration' method='post'>";
    echo "Username: <input type='text' name='username'><br>";
    echo "<input type='submit' value='Register'>";
    echo "</form>";
  }

  public function processRegistration() {
    // La méthode "processRegistration" récupère les informations d'inscription soumises par l'utilisateur à partir de la superglobale $_POST.
    $user_info = array('username' => $_POST['username']);

    // Instancier le modèle utilisateur
    $user_model = new UserModel();

    // Appeler la méthode save du modèle utilisateur pour stocker les informations utilisateur
    $user_model->save($user_info);

    // Afficher un message de confirmation d'inscription
    echo "Inscription réussie pour l'utilisateur " . $user_info['username'];
  }
}


?>