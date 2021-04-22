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
            'name' => 'Jac Bocalan',
            'firstname' => 'Jac',
            'lastname' => 'Bocalan',
            'email' => 'jnbocalan@smart.com.ph',
        ]);

        UserWhiteList::create([
            'name' => 'Doy Gonzales',
            'firstname' => 'Doy',
            'lastname' => 'Gonzales',
            'email' => 'ddgonzales1@smart.com.ph',
        ]);

        UserWhiteList::create([
            'name' => 'Marmillan Cruz',
            'firstname' => 'Marmillan',
            'lastname' => 'Cruz',
            'email' => 'mlcruz@smart.com.ph',
        ]);

        UserWhiteList::create([
            'name' => 'Gerald Ang',
            'firstname' => 'Gerald',
            'lastname' => 'Ang',
            'email' => 'gerald.ang@unilever.com',
        ]);

        UserWhiteList::create([
            'name' => 'Brian Chanyungco',
            'firstname' => 'Brian',
            'lastname' => 'Chanyungco',
            'email' => 'brian.chanyungco@unilever.com',
        ]);

        UserWhiteList::create([
            'name' => 'Cyvil Alcaneses',
            'firstname' => 'Cyvil',
            'lastname' => 'Alcaneses',
            'email' => 'cyvil.alcaneses@unilever.com',
        ]);

        UserWhiteList::create([
            'name' => 'Eric Pallen',
            'firstname' => 'Cyvil',
            'lastname' => 'Alcaneses',
            'email' => 'eric.pallen@vouno.com.ph',
        ]);

        UserWhiteList::create([
            'name' => 'Carole Nisperos',
            'firstname' => 'Carole',
            'lastname' => 'Nisperos',
            'email' => 'carole.nisperos@vouno.com.ph',
        ]);

        UserWhiteList::create([
            'name' => 'Tet Gammad',
            'firstname' => 'Tet',
            'lastname' => 'Gammad',
            'email' => 'celeste.larena-gammad@unilever.com',
        ]);

        UserWhiteList::create([
            'name' => 'Jonathan Auza',
            'firstname' => 'Jonathan',
            'lastname' => 'Auza',
            'email' => 'auza.jonathan@bdo.com.ph',
        ]);
    }
}
