<?php

//Exercice 3-6

require_once 'Controller.php';
require_once 'ContactView.php';

class ContactController extends Controller {
    private $contact_view;

    public function __construct() {
        $this->contact_view = new ContactView();
    }

    public function index() {
        $this->contact_view->render('index');
    }

    public function submit() {
        // récupérer les données du formulaire de contact
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // envoyer un email à l'adresse prédéfinie avec les données du formulaire de contact
        $to = 'contact@monsite.com';
        $subject = 'Nouveau message de ' . $name;
        $body = 'Email : ' . $email . "\r\n\r\n" . 'Message : ' . $message;

        if (mail($to, $subject, $body)) {
            // afficher un message de confirmation si l'email a été envoyé avec succès
            $this->contact_view->render('success');
        } else {
            // afficher un message d'erreur si l'email n'a pas pu être envoyé
            $this->contact_view->render('error');
        }
    }
}

?>