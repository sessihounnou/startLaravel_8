<?php

namespace Database\Seeders;

use App\Models\produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Produit= new produit();
        $Produit->nom="Gray Shoe";
        $Produit->prix_ht=20.00;
        $Produit->description=" ";
        $Produit->photo_principale="prod_2.png";
        $Produit->save();

        $Produit= new produit();
        $Produit->nom="Blue Shoe High Heels";
        $Produit->prix_ht=28.00;
        $Produit->description=" ";
        $Produit->photo_principale="prod_3.png";
        $Produit->save();

        $Produit= new produit();
        $Produit->nom="Denim Jacket";
        $Produit->prix_ht=20.00;
        $Produit->description=" ";
        $Produit->photo_principale="model_5.png";
        $Produit->save();

        $Produit= new produit();
        $Produit->nom="Leather Green Bag";
        $Produit->prix_ht=28.00;
        $Produit->description=" ";
        $Produit->photo_principale="prod_2.png";
        $Produit->save();

        $Produit= new produit();
        $Produit->nom="Smooth Cloth";
        $Produit->prix_ht=50;
        $Produit->description=" ";
        $Produit->photo_principale="model_1.png";
        $Produit->save();

        $Produit= new produit();
        $Produit->nom="Yellow Jacket";
        $Produit->prix_ht=60.00;
        $Produit->description=" ";
        $Produit->photo_principale="model_7.png";
        $Produit->save();

    }
}
