<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    public function run()
    {
        // Create the roles
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Supervisor']);
    }
}