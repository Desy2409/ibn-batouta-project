<?php

namespace Database\Seeders;

use App\Models\SubHome;
use App\Models\SubHomeFrench;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SubHomeTableSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_sub_homes = File::get('database/datas/sub_home_fr.json');
        $subHomes = json_decode($json_sub_homes);
        foreach ($subHomes as $key => $subHome) {
            $existingSubHome = SubHome::where('subhomeable_type', '=', SubHomeFrench::class)->first();

            if (!$existingSubHome) {
                $subHomeFrench = new SubHomeFrench();
                $subHomeFrench->save();

                SubHome::create([
                    'sub_title' => $subHome->sub_title,
                    'sub_description' => $subHome->sub_description,
                    'subhomeable_id' => $subHomeFrench->id,
                    'subhomeable_type' => SubHomeFrench::class,
                ]);
            }
        }
    }
}
