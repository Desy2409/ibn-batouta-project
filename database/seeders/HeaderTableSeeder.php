<?php

namespace Database\Seeders;

use App\Models\Header;
use App\Models\HeaderFrench;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_headers = File::get('database/datas/header_fr.json');
        $headers = json_decode($json_headers);
        foreach ($headers as $key => $header) {
            $existingHeader = Header::where('headerable_type', '=', HeaderFrench::class)->first();

            if (!$existingHeader) {
                $headerFrench = new HeaderFrench();
                $headerFrench->save();

                Header::create([
                    'home' => $header->home,
                    'iaib' => $header->iaib,
                    'opportunity' => $header->opportunity,
                    'training' => $header->training,
                    'team' => $header->team,
                    'press' => $header->press,
                    'contact' => $header->contact,
                    'headerable_id' => $headerFrench->id,
                    'headerable_type' => HeaderFrench::class,
                ]);
            }
        }
    }
}
