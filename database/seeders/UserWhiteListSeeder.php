<?php

namespace Database\Seeders;

use App\Models\UserWhiteList;
use Illuminate\Database\Seeder;

class UserWhiteListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserWhiteList::create([
            'name' => strtolower('Jac Bocalan'),
            'firstname' => strtolower('Jac'),
            'lastname' => strtolower('Bocalan'),
            'email' => strtolower('jnbocalan@smart.com.ph'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Doy Gonzales'),
            'firstname' => strtolower('Doy'),
            'lastname' => strtolower('Gonzales'),
            'email' => strtolower('ddgonzales1@smart.com.ph'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Marmillan Cruz'),
            'firstname' => strtolower('Marmillan'),
            'lastname' => strtolower('Cruz'),
            'email' => strtolower('mlcruz@smart.com.ph'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Gerald Ang'),
            'firstname' => strtolower('Gerald'),
            'lastname' => strtolower('Ang'),
            'email' => strtolower('gerald.ang@unilever.com'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Brian Chanyungco'),
            'firstname' => strtolower('Brian'),
            'lastname' => strtolower('Chanyungco'),
            'email' => strtolower('brian.chanyungco@unilever.com'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Cyvil Alcaneses'),
            'firstname' => strtolower('Cyvil'),
            'lastname' => strtolower('Alcaneses'),
            'email' => strtolower('cyvil.alcaneses@unilever.com'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Eric Pallen'),
            'firstname' => strtolower('Cyvil'),
            'lastname' => strtolower('Alcaneses'),
            'email' => strtolower('eric.pallen@vouno.com.ph'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Carole Nisperos'),
            'firstname' => strtolower('Carole'),
            'lastname' => strtolower('Nisperos'),
            'email' => strtolower('carole.nisperos@vouno.com.ph'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Tet Gammad'),
            'firstname' => strtolower('Tet'),
            'lastname' => strtolower('Gammad'),
            'email' => strtolower('celeste.larena-gammad@unilever.com'),
        ]);

        UserWhiteList::create([
            'name' => strtolower('Jonathan Auza'),
            'firstname' => strtolower('Jonathan'),
            'lastname' => strtolower('Auza'),
            'email' => strtolower('auza.jonathan@bdo.com.ph'),
        ]);

        // UserWhiteList::create([
        //     'name' => strtolower('Jayson Kenn Julian'),
        //     'firstname' => strtolower('Jayson Kenn'),
        //     'lastname' => strtolower('Julian'),
        //     'email' => strtolower('gr34tnull@gmail.com'),
        // ]);
    }
}
