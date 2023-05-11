<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Exercice 4:  Utilisation des classes pour afficher les informations utilisateur 

//nous avons créé un fichier index.php qui inclut les fichiers UserController.php et UserView.php




require_once 'UserController.php';
require_once 'UserView.php';
require_once 'ProductsController.php';
require_once 'ProductView.php';
require_once 'Controller.php';
require_once 'ProductModel.php';

// Instancier une classe UserController et appeler la méthode "register" pour afficher le formulaire d'inscription utilisateur
$user_controller = new UserController();
$user_controller->register();

// Si des informations d'inscription ont été soumises via POST, instancier une classe UserController et appeler la méthode "processRegistration" pour les traiter
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_controller = new UserController();
  $user_controller->processRegistration($_POST);
}

// Instancier une classe UserView et appeler la méthode "display" pour afficher les informations utilisateur stockées dans le modèle
$user_view = new UserView();
$user_view->display();


?>

 <!--<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Prix</th>
    </tr>
  </thead>
  <tbody>
    Exercice 5: il faut créer des produits en base de données
   <?php foreach ($products as $product) : ?>
      <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['price'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>-->

<!-- Exercice 3-6 -->
<form method="post" action="/contact/submit">
<label for="name">Nom :</label>
<input type="text" id="name" name="name" required>

<label for="email">Email :</label>
<input type="email" id="email" name="email" required>

<label for="message">Message :</label>
<textarea id="message" name="message" required></textarea>

<input type="submit" value="Envoyer">
</form>

</body>
<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user'])) {
  // Récupérer les informations de l'utilisateur
  $user = $_SESSION['user'];
}

// Afficher les informations de l'utilisateur si l'utilisateur est connecté
if (isset($user)) {
  echo 'Bonjour ' . $user['username'] . ' !';
} else {
  echo 'Veuillez vous connecter pour accéder à cette page.';
}
?>


</html>