<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existingAdministrator = Administrator::where('last_name', 'ADMIN')->where('first_name', 'Admin')->first();
        $user = User::latest()->first();
        if (!$existingAdministrator) {
            Administrator::create([
                'last_name' => 'ADMIN',
                'first_name' => 'Admin',
                'user_id' => $user->id,
            ]);
        }
    }
}
