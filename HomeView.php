<?php
class HomeView extends Controller {
    private $user;
  
    public function __construct($user) {
        $this->user = $user;
    }
  
    public function render($template) {
        // Utiliser la variable $user dans la vue
        include 'views/templates/header.php';
        include "views/home/$template.php";
        include 'views/templates/footer.php';
    }
}
?>