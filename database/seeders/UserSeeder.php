<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom'=>'OUEDRAOGO',
            'prenom'=>'Aminata',
            'email'=>'ami@gmail.com',
            'password'=> Hash::make('password'),
            'roles_id' => 1

        ]);

        User::create([
            'nom'=>'UNZ',
            'email'=>'unz@gmail.com',
            'picture'=>'logo.png',
            'localisation'=>'Koudougou , secteur 8',
            'password'=> Hash::make('password'),
            'roles_id' => 2

        ]);
    }
}
