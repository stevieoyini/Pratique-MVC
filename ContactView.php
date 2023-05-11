<?php
//Exercice 3-6
class ContactView {
    public function render($view, $data = []) {
        // Extraire les données de $data pour les utiliser dans la vue
        extract($data);

        // Afficher la vue
        require_once 'views/contact/' . $view . '.php';
    }
}

?>