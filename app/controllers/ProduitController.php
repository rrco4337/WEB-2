<?php

namespace app\controllers;

use app\models\ProduitModel;
use Flight;

class ProduitController
{
    public function index()
    {
        $produit = ProduitModel::getAllProduct();

        Flight::render('index', ['produits' => $produit]);
    }
}
?>