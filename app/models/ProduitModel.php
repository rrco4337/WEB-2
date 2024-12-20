<?php
namespace app\models;

class ProduitModel
{
    public static function getAllProduct()
    {
        $produit= [
            [
                "nom" => "Fancy Product",
                "prix_min" => 40.00,
                "prix_max" => 80.00,
                "prix_original" => null,
                "prix_promo" => null,
                "etoiles" => null,
                "en_solde" => false,
                "image" => "../assets/images/favicon.ico"
            ],
            [
                "nom" => "Special Item",
                "prix_min" => null,
                "prix_max" => null,
                "prix_original" => 20.00,
                "prix_promo" => 18.00,
                "etoiles" => 5,
                "en_solde" => true,
                "image" => "Special"
            ],
            [
                "nom" => "Sale Item",
                "prix_min" => null,
                "prix_max" => null,
                "prix_original" => 50.00,
                "prix_promo" => 25.00,
                "etoiles" => null,
                "en_solde" => true,
                "image" => "Sale"
            ],
            [
                "nom" => "Popular Item",
                "prix_min" => null,
                "prix_max" => null,
                "prix_original" => 40.00,
                "prix_promo" => null,
                "etoiles" => 5,
                "en_solde" => false,
                "image" => "Popular"
            ],
            [
                "nom" => "Sale Item",
                "prix_min" => null,
                "prix_max" => null,
                "prix_original" => 50.00,
                "prix_promo" => 25.00,
                "etoiles" => null,
                "en_solde" => true,
                "image" => "Sale"
            ],
            [
                "nom" => "Fancy Product",
                "prix_min" => 120.00,
                "prix_max" => 280.00,
                "prix_original" => null,
                "prix_promo" => null,
                "etoiles" => null,
                "en_solde" => false,
                "image" => "Fancy"
            ],
            [
                "nom" => "Special Item",
                "prix_min" => null,
                "prix_max" => null,
                "prix_original" => 20.00,
                "prix_promo" => 18.00,
                "etoiles" => 5,
                "en_solde" => true,
                "image" => "Special"
            ],
            [
                "nom" => "Popular Item",
                "prix_min" => null,
                "prix_max" => null,
                "prix_original" => 40.00,
                "prix_promo" => null,
                "etoiles" => 5,
                "en_solde" => false,
                "image" => "Popular"
            ]
        ];

    return $produit;
    }
}
