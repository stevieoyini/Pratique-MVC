<?php
require_once 'Controller.php';
require_once 'HomeView.php';
require_once 'AuthModel.php';

class HomeController extends Controller {
    public function index() {
        // Vérifier si l'utilisateur est connecté
        if (!$this->isLoggedIn()) {
          // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
          header('Location: login.php');
          exit();
        }
      
         // Récupérer les informations de l'utilisateur connecté
         $auth_model = new AuthModel();
         $user = $auth_model->getUser();
         
        // Instancier la classe HomeView
        $home_view = new HomeView($user);
      
        // Afficher la page d'accueil réservée aux membres en utilisant la méthode render() de HomeView
        $home_view->render('index');
      }
}



?>