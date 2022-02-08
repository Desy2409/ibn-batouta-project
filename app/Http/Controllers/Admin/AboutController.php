<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutArabic;
use App\Models\AboutEnglish;
use App\Models\AboutFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
        $this->middleware(['auth:admin']);
    }

    public function index()
    {
        $about = "Configuration des partenaires";
        $aboutArabic = About::where('aboutable_type', '=', AboutArabic::class)->first();
        $aboutEnglish = About::where('aboutable_type', '=', AboutEnglish::class)->first();
        $aboutFrench = About::where('aboutable_type', '=', AboutFrench::class)->first();

        return view('admin.pages.about', compact('about', 'aboutArabic', 'aboutEnglish', 'aboutFrench'));
    }

    public function store(Request $request)
    {
        $latestAboutArabic = AboutArabic::latest()->first();
        $latestAboutEnglish = AboutEnglish::latest()->first();
        $latestAboutFrench = AboutFrench::latest()->first();
        // $this->validate(
        //     $request,
        //     [
        //         'about_ar' => 'required',
        //         'about_en' => 'required',
        //         'about_fr' => 'required',
        //     ],
        //     [
        //         'about.required' => "Ce champ est obligatoire."
        //     ]
        // );

        try {
            if ($latestAboutArabic) {
                $about = About::where('aboutable_type', '=', AboutArabic::class)->where('aboutable_id', '=', $latestAboutArabic->id)->first();

                $about->name = $request->name_ar;
                $about->currency = $request->currency_ar;
                $about->geographic_location = $request->geographic_location_ar;
                $about->email = $request->email_ar;
                $about->web_site = $request->web_site;
                $about->phone_number = $request->phone_number;
                $about->bp = $request->bp_ar;
                $about->legal_situation = $request->legal_situation_ar;
                $about->stopped = $request->stopped_ar;
                $about->identity = $request->identity_ar;
                $about->mission = $request->mission_ar;
                $about->plan = $request->plan_ar;
                $about->vision = $request->vision_ar;
                $about->message = $request->message_ar;
                $about->value = $request->value_ar;
                $about->goal = $request->goal_ar;
                $about->save();
            } else {
                $aboutArabic = new AboutArabic();
                $aboutArabic->save();

                $about = new About();
                $about->name = $request->name_ar;
                $about->currency = $request->currency_ar;
                $about->geographic_location = $request->geographic_location_ar;
                $about->email = $request->email;
                $about->web_site = $request->web_site;
                $about->phone_number = $request->phone_number_ar;
                $about->bp = $request->bp_ar;
                $about->legal_situation = $request->legal_situation_ar;
                $about->stopped = $request->stopped_ar;
                $about->identity = $request->identity_ar;
                $about->mission = $request->mission_ar;
                $about->plan = $request->plan_ar;
                $about->vision = $request->vision_ar;
                $about->message = $request->message_ar;
                $about->value = $request->value_ar;
                $about->goal = $request->goal_ar;
                $about->aboutable_id = $aboutArabic->id;
                $about->aboutable_type = AboutArabic::class;
                $about->save();
            }

            if ($latestAboutEnglish) {
                $about = About::where('aboutable_type', '=', AboutEnglish::class)->where('aboutable_id', '=', $latestAboutEnglish->id)->first();

                $about->name = $request->name_en;
                $about->currency = $request->currency_en;
                $about->geographic_location = $request->geographic_location_en;
                $about->email = $request->email;
                $about->web_site = $request->web_site;
                $about->phone_number = $request->phone_number_en;
                $about->bp = $request->bp_en;
                $about->legal_situation = $request->legal_situation_en;
                $about->stopped = $request->stopped_en;
                $about->identity = $request->identity_en;
                $about->mission = $request->mission_en;
                $about->plan = $request->plan_en;
                $about->vision = $request->vision_en;
                $about->message = $request->message_en;
                $about->value = $request->value_en;
                $about->goal = $request->goal_en;
                $about->save();
            } else {
                $aboutEnglish = new AboutEnglish();
                $aboutEnglish->save();

                $about = new About();
                $about->name = $request->name_en;
                $about->currency = $request->currency_en;
                $about->geographic_location = $request->geographic_location_en;
                $about->email = $request->email;
                $about->web_site = $request->web_site;
                $about->phone_number = $request->phone_number_en;
                $about->bp = $request->bp_en;
                $about->legal_situation = $request->legal_situation_en;
                $about->stopped = $request->stopped_en;
                $about->identity = $request->identity_en;
                $about->mission = $request->mission_en;
                $about->plan = $request->plan_en;
                $about->vision = $request->vision_en;
                $about->message = $request->message_en;
                $about->value = $request->value_en;
                $about->goal = $request->goal_en;
                $about->aboutable_id = $aboutEnglish->id;
                $about->aboutable_type = AboutEnglish::class;
                $about->save();
            }
            if ($latestAboutFrench) {
                $about = About::where('aboutable_type', '=', AboutFrench::class)->where('aboutable_id', '=', $latestAboutFrench->id)->first();

                $about->name = $request->name_fr;
                $about->currency = $request->currency_fr;
                $about->geographic_location = $request->geographic_location_fr;
                $about->email = $request->email;
                $about->web_site = $request->web_site;
                $about->phone_number = $request->phone_number_fr;
                $about->bp = $request->bp_fr;
                $about->legal_situation = $request->legal_situation_fr;
                $about->stopped = $request->stopped_fr;
                $about->identity = $request->identity_fr;
                $about->mission = $request->mission_fr;
                $about->plan = $request->plan_fr;
                $about->vision = $request->vision_fr;
                $about->message = $request->message_fr;
                $about->value = $request->value_fr;
                $about->goal = $request->goal_fr;
                $about->save();
            } else {
                $aboutFrench = new AboutFrench();
                $aboutFrench->save();

                $about = new About();
                $about->name = $request->name_fr;
                $about->currency = $request->currency_fr;
                $about->geographic_location = $request->geographic_location_fr;
                $about->email = $request->email;
                $about->web_site = $request->web_site;
                $about->phone_number = $request->phone_number_fr;
                $about->bp = $request->bp_fr;
                $about->legal_situation = $request->legal_situation_fr;
                $about->stopped = $request->stopped_fr;
                $about->identity = $request->identity_fr;
                $about->mission = $request->mission_fr;
                $about->plan = $request->plan_fr;
                $about->vision = $request->vision_fr;
                $about->message = $request->message_fr;
                $about->value = $request->value_fr;
                $about->goal = $request->goal_fr;
                $about->aboutable_id = $aboutFrench->id;
                $about->aboutable_type = AboutFrench::class;
                $about->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            dd($e);
            Session::flash('error', "Erreur survenue lors de l'enregistrement.");
        }
    }
}
