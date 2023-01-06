<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Role::create(['name'=>'umfrage_leader']);
        // Role::create(['name'=>'manager']);
        // Role::create(['name'=>'hr']);
        // Role::create(['name'=>'supervisor']);
        // Role::create(['name'=>'team_leader']);
        // Role::create(['name'=>'confirmation_agent']);
        // Role::create(['name'=>'quality_agent']);
        // Role::create(['name'=>'call_agent']);
        // Role::create(['name'=>'umfrage_agent']);
    }
}
