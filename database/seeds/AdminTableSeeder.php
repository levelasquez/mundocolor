<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('users')->insert(array(
            'name'       => 'MundoColor',
            'email'      => 'mundocolor@mundocolor.com',
            'password'   => \Hash::make('secret')
        ));
    }
}