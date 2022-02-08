<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = date('Y');

        $existingUser = User::where('email', 'admin@admin.com')->first();
        if(!$existingUser){
            User::create([
            'user_type' => 'Admin', 
            'name' => 'Admin ADMIN', 
            'email' => 'admin@admin.com', 
            'password' => Hash::make('Password@'), 
            'token' => Hash::make('admin' . 'admin@admin.com' . '@$@' . $year),
        ]);
        }
        
    }
}
