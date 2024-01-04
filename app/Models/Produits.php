<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;

class Produits extends Model
{
    public function getPrix(){
        $prix=$this->prix/100;
    
    return number_format( $prix,'2',',',' ') .'FCFA';
    }
}
