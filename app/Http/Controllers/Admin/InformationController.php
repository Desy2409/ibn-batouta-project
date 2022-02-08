<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\InformationArabic;
use App\Models\InformationEnglish;
use App\Models\InformationFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
    }

    public function index()
    {
        $information = "Configuration information du site";
        $informationArabic = Information::where('informationable_type', '=', InformationArabic::class)->first();
        $informationEnglish = Information::where('informationable_type', '=', InformationEnglish::class)->first();
        $informationFrench = Information::where('informationable_type', '=', InformationFrench::class)->first();
        return view('admin.pages.information', compact('information','informationArabic','informationEnglish','informationFrench'));
    }

    public function store(Request $request)
    {
        $latestInformationArabic = InformationArabic::latest()->first();
        $latestInformationEnglish = InformationEnglish::latest()->first();
        $latestInformationFrench = InformationFrench::latest()->first();
        // $this->validate(
        //     $request,
        //     [
        //         'information_ar' => 'required',
        //         'information_en' => 'required',
        //         'information_fr' => 'required',
        //     ],
        //     [
        //         'information.required' => "Ce champ est obligatoire."
        //     ]
        // );

        try {
            if ($latestInformationArabic) {
                $information = Information::where('informationable_type', '=', InformationArabic::class)->where('informationable_id', '=', $latestInformationArabic->id)->first();
                
                $information->site_information = $request->site_information_ar;
                $information->save();
            } else {
                $informationArabic = new InformationArabic();
                $informationArabic->save();

                $information = new Information();
                $information->site_information = $request->site_information_ar;
                $information->informationable_id = $informationArabic->id;
                $information->informationable_type = InformationArabic::class;
                $information->save();
            }

            if ($latestInformationEnglish) {
                $information = Information::where('informationable_type', '=', InformationEnglish::class)->where('informationable_id', '=', $latestInformationEnglish->id)->first();
                
                $information->site_information = $request->site_information_en;
                $information->save();
            } else {
                $informationEnglish = new InformationEnglish();
                $informationEnglish->save();

                $information = new Information();
                $information->site_information = $request->site_information_en;
                $information->informationable_id = $informationEnglish->id;
                $information->informationable_type = InformationEnglish::class;
                $information->save();
            }

            if ($latestInformationFrench) {
                $information = Information::where('informationable_type', '=', InformationFrench::class)->where('informationable_id', '=', $latestInformationFrench->id)->first();
                
                $information->site_information = $request->site_information_fr;
                $information->save();
            } else {
                $informationFrench = new InformationFrench();
                $informationFrench->save();

                $information = new Information();
                $information->site_information = $request->site_information_fr;
                $information->informationable_id = $informationFrench->id;
                $information->informationable_type = InformationFrench::class;
                $information->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            Session::flash('error', "Erreur survenue lors de l'enregistrement.");
        }
    }
}
