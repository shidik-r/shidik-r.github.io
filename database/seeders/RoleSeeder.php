<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::upsert([
            ['name' => 'Administrator', 'description' => 'All Access'],
            ['name' => 'User', 'description' => 'Limited Access']
        ], uniqueBy: ['name'], update: ['description']);
    }
}
