<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Administrateur']);
        Role::create(['name' => 'fournisseur']);
        Role::create(['name' => 'transitaire']);
        Role::create(['name' => 'Modérateur']);
        Role::create(['name' => 'client']);
}
}
