<?php
//Exercice 5: création d'un controler pour affincher la liste des produits 

require_once 'Controller.php';
require_once 'ProductModel.php';
require_once 'ProductView.php';

class ProductsController extends Controller {
  public function index() {
    // Récupérer une liste de produits à partir du modèle ProductModel
    $product_model = new ProductModel();
    $products = $product_model->getProducts();

    // Passer la liste de produits à la vue ProductView
    $product_view = new ProductView();
    $product_view->render('index', ['products' => $products]);
  }
}


?>