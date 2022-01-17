<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutArabic;
use App\Models\AboutEnglish;
use App\Models\AboutFrench;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_abouts_ar = File::get('database/datas/about_ar.json');
        $aboutArabics = json_decode($json_abouts_ar);

        $json_abouts_en = File::get('database/datas/about_en.json');
        $aboutEnglishes = json_decode($json_abouts_en);

        $json_abouts_fr = File::get('database/datas/about_fr.json');
        $aboutFrenches = json_decode($json_abouts_fr);

        foreach ($aboutArabics as $key => $about) {
            $existingAboutArabic = About::where('aboutable_type', '=', AboutArabic::class)->first();

            if (!$existingAboutArabic) {
                $aboutArabic = new AboutArabic();
                $aboutArabic->save();

                About::create([
                    'email' => $about->email,
                    'mission' => $about->mission,
                    'plan' => $about->plan,
                    'vision' => $about->vision,
                    'stopped' => $about->stopped,
                    'aboutable_type' => AboutArabic::class,
                ]);
            }
        }

        foreach ($aboutEnglishes as $key => $about) {
            $existingAboutEnglish = About::where('aboutable_type', '=', AboutEnglish::class)->first();

            if (!$existingAboutEnglish) {
                $aboutEnglish = new AboutEnglish();
                $aboutEnglish->save();

                About::create([
                    'email' => $about->email,
                    'mission' => $about->mission,
                    'plan' => $about->plan,
                    'vision' => $about->vision,
                    'stopped' => $about->stopped,
                    'aboutable_type' => AboutEnglish::class,
                ]);
            }
        }

        foreach ($aboutFrenches as $key => $about) {
            $existingAboutFrench = About::where('aboutable_type', '=', AboutFrench::class)->first();

            if (!$existingAboutFrench) {
                $aboutFrench = new AboutFrench();
                $aboutFrench->save();

                About::create([
                    'email' => $about->email,
                    'mission' => $about->mission,
                    'plan' => $about->plan,
                    'vision' => $about->vision,
                    'stopped' => $about->stopped,
                    'aboutable_type' => AboutFrench::class,
                ]);
            }
        }
    }
}
