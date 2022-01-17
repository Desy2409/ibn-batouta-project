<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\PartnerArabic;
use App\Models\PartnerEnglish;
use App\Models\PartnerFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
        $this->middleware(['auth:admin']);
    }

    public function index()
    {
        $partner = "Configuration des partenaires";
        $arabicPartner = Partner::where('partnerable_type', '=', PartnerArabic::class)->first();
        $englishPartner = Partner::where('partnerable_type', '=', PartnerEnglish::class)->first();
        $frenchPartner = Partner::where('partnerable_type', '=', PartnerFrench::class)->first();

        return view('admin.pages.partner', compact('partner', 'arabicPartner', 'englishPartner', 'frenchPartner'));
    }

    public function store(Request $request)
    {
        $latestPartnerArabic = PartnerArabic::latest()->first();
        $latestPartnerEnglish = PartnerEnglish::latest()->first();
        $latestPartnerFrench = PartnerFrench::latest()->first();
        // $this->validate(
        //     $request,
        //     [
        //         'partner_ar' => 'required',
        //         'partner_en' => 'required',
        //         'partner_fr' => 'required',
        //     ],
        //     [
        //         'partner.required' => "Ce champ est obligatoire."
        //     ]
        // );

        try {
            if ($latestPartnerArabic) {
                $partner = Partner::where('partnerable_type', '=', PartnerArabic::class)->where('partnerable_id', '=', $latestPartnerArabic->id)->first();

                $partner->partner = $request->partner_ar;
                $partner->save();
            } else {
                $partnerArabic = new PartnerArabic();
                $partnerArabic->save();

                $partner = new Partner();
                $partner->partner = $request->partner_ar;
                $partner->partnerable_id = $partnerArabic->id;
                $partner->partnerable_type = PartnerArabic::class;
                $partner->save();
            }

            if ($latestPartnerEnglish) {
                $partner = Partner::where('partnerable_type', '=', PartnerEnglish::class)->where('partnerable_id', '=', $latestPartnerEnglish->id)->first();

                $partner->partner = $request->partner_ar;
                $partner->save();
            } else {
                $partnerEnglish = new PartnerEnglish();
                $partnerEnglish->save();

                $partner = new Partner();
                $partner->partner = $request->partner_en;
                $partner->partnerable_id = $partnerEnglish->id;
                $partner->partnerable_type = PartnerEnglish::class;
                $partner->save();
            }

            if ($latestPartnerFrench) {
                $partner = Partner::where('partnerable_type', '=', PartnerFrench::class)->where('partnerable_id', '=', $latestPartnerFrench->id)->first();

                $partner->partner = $request->partner_ar;
                $partner->save();
            } else {
                $partnerFrench = new PartnerFrench();
                $partnerFrench->save();

                $partner = new Partner();
                $partner->partner = $request->partner_fr;
                $partner->partnerable_id = $partnerFrench->id;
                $partner->partnerable_type = PartnerFrench::class;
                $partner->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            dd($e);
            Session::flash('error', "Erreur survenue lors de l'enregistrement.");
        }
    }
}
