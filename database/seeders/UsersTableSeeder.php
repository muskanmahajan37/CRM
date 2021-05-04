<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1], [
            'name' => 'Tyson London',
            'email' => 'tyson@modcul.com',
            'password' => '$2y$10$uiyFOJdjCJRBUvR69aExAOh4uS6ppW6YkOTYvFEbxMOI2WRdFOYxC' // Password
        ]);
    }
}
