<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++)
        {
            $categoria = $faker->FirstName;


            $id = \DB::table('categorias')->insert(array(
                'categoria'  => $categoria,
            ));
        }
    }
}