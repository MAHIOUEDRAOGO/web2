<?php

namespace Database\Seeders;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Produits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;


class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory :: create();
        for($i=0;$i<20;$i++){
            Produits::Create ([
                'titre'=>$faker->sentence(1),
                'slug'=>$faker->slug,
                'sous_titre'=>$faker->sentence(3),
                'description'=>$faker->text,
                'prix'=>$faker->numberBetween(15, 300) * 100,
                'image'=>'https://via.placeholder.com/200x250',
            ]);
            
        }
    }
}
