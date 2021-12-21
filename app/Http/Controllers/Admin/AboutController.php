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
    }

    public function index()
    {
        $about = "Configuration des partenaires";
        $abouts = About::all();
        return view('admin.pages.about', compact('about'));
    }

    public function store(Request $request)
    {
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
            $aboutArabic = new AboutArabic();
            $aboutArabic->save();

            $about = new About();
            $about->name = $request->name_ar;
            $about->currency = $request->currency_ar;
            $about->geographic_location = $request->geographic_location_ar;
            $about->email = $request->email_ar;
            $about->web_site = $request->web_site_ar;
            $about->phone_number = $request->phone_number_ar;
            $about->bp = $request->bp_ar;
            $about->legal_situation = $request->legal_situation_ar;
            $about->stopped = $request->stopped_ar;
            $about->identity = $request->identity_ar;
            $about->vision = $request->vision_ar;
            $about->message = $request->message_ar;
            $about->value = $request->value_ar;
            $about->goal = $request->goal_ar;
            $about->aboutable_id = $aboutArabic->id;
            $about->aboutable_type = AboutArabic::class;
            $about->save();

            
            $aboutEnglish = new AboutEnglish();
            $aboutEnglish->save();

            $about = new About();
            $about->name = $request->name_en;
            $about->currency = $request->currency_en;
            $about->geographic_location = $request->geographic_location_en;
            $about->email = $request->email_en;
            $about->web_site = $request->web_site_en;
            $about->phone_number = $request->phone_number_en;
            $about->bp = $request->bp_en;
            $about->legal_situation = $request->legal_situation_en;
            $about->stopped = $request->stopped_en;
            $about->identity = $request->identity_en;
            $about->vision = $request->vision_en;
            $about->message = $request->message_en;
            $about->value = $request->value_en;
            $about->goal = $request->goal_en;
            $about->aboutable_id = $aboutEnglish->id;
            $about->aboutable_type = AboutEnglish::class;
            $about->save();

            $aboutFrench = new AboutFrench();
            $aboutFrench->save();


            $about = new About();
            $about->name = $request->name_fr;
            $about->currency = $request->currency_fr;
            $about->geographic_location = $request->geographic_location_fr;
            $about->email = $request->email_fr;
            $about->web_site = $request->web_site_fr;
            $about->phone_number = $request->phone_number_fr;
            $about->bp = $request->bp_fr;
            $about->legal_situation = $request->legal_situation_fr;
            $about->stopped = $request->stopped_fr;
            $about->identity = $request->identity_fr;
            $about->vision = $request->vision_fr;
            $about->message = $request->message_fr;
            $about->value = $request->value_fr;
            $about->goal = $request->goal_fr;
            $about->aboutable_id = $aboutFrench->id;
            $about->aboutable_type = AboutFrench::class;
            $about->save();

            Session::flash('success', "Enregistrement effectué avec succès.");

            return back();
        } catch (Exception $e) {
            Session::flash('error', "Erreur survenue lors de l'enregistrement.");
        }
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
