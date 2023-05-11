<?php
require_once 'Controller.php';

class AuthController extends Controller {
    public function login() {
        // Instancier la classe AuthView
        $auth_view = new AuthView();
      
        // Afficher le formulaire de connexion en utilisant la méthode render() de AuthView
        $auth_view->render('login');
      }

    public function register() {
        // Instancier la classe AuthView
        $auth_view = new AuthView();
      
        // Afficher le formulaire d'inscription en utilisant la méthode render() de AuthView
        $auth_view->render('register');
      }

}


?>