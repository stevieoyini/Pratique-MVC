<?php

class AuthModel {
    private $users = [
        ['username' => 'alice', 'password' => '1234', 'email' => 'alice@example.com'],
        ['username' => 'bob', 'password' => '5678', 'email' => 'bob@example.com']
    ];

    public function login($username, $password) {
        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                // Si l'utilisateur existe et le mot de passe est correct, démarrer la session et stocker les informations de l'utilisateur
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $user['email'];
                return true;
            }
        }
        // Si l'utilisateur n'existe pas ou le mot de passe est incorrect, retourner false
        return false;
    }

    public function register($username, $password, $email) {
        // Vérifier si l'utilisateur existe déjà
        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                // Si l'utilisateur existe déjà, retourner false
                return false;
            }
        }
        // Si l'utilisateur n'existe pas, ajouter l'utilisateur à la liste des utilisateurs
        $this->users[] = ['username' => $username, 'password' => $password, 'email' => $email];
        return true;
    }

    public function getUser() {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['username'])) {
            return null;
        }
        // Retourner les informations de l'utilisateur connecté
        foreach ($this->users as $user) {
            if ($user['username'] === $_SESSION['username']) {
                return ['username' => $user['username'], 'email' => $user['email']];
            }
        }
        return null;
    }

    public function logout() {
        // Détruire la session et rediriger l'utilisateur vers la page de connexion
        session_start();
        session_destroy();
        header('Location: login.php');
        exit();
    }
}


?>