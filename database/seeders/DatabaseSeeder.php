<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleSeeder::class);

        // $user =  User::create([
        //     'name'=>'Confirmation Agent',
        //     'email'=>'confirmation_agent@gmail.com',
        //     'password'=>Hash::make('123123'),
        // ]);
        // $user->assignRole('confirmation_agent');
    }
}
