<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\HomeFrench;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class HomeTableSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_homes = File::get('database/datas/home_fr.json');
        $homes = json_decode($json_homes);
        foreach ($homes as $key => $home) {
            $existingHome = Home::where('homeable_type', '=', HomeFrench::class)->first();

            if (!$existingHome) {
                $homeFrench = new HomeFrench();
                $homeFrench->save();

                Home::create([
                    'title' => $home->title,
                    'description' => $home->description,
                    'homeable_id' => $homeFrench->id,
                    'homeable_type' => HomeFrench::class,
                ]);
            }
        }
    }
}
