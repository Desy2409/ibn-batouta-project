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

class PartnerController_old extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
    }

    public function index()
    {
        $partner = "Configuration des partenaires";
        $partners = Partner::all();
        return view('admin.pages.partner', compact('partner'));
    }

    public function store(Request $request)
    {
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
            $partnerArabic = new PartnerArabic();
            $partnerArabic->save();

            $partner = new Partner();
            $partner->partner = $request->partner_ar;
            $partner->partnerable_id = $partnerArabic->id;
            $partner->partnerable_type = PartnerArabic::class;
            $partner->save();


            $partnerEnglish = new PartnerEnglish();
            $partnerEnglish->save();

            $partner = new Partner();
            $partner->partner = $request->partner_en;
            $partner->partnerable_id = $partnerEnglish->id;
            $partner->partnerable_type = PartnerEnglish::class;
            $partner->save();

            
            $partnerFrench = new PartnerFrench();
            $partnerFrench->save();

            $partner = new Partner();
            $partner->partner = $request->partner_fr;
            $partner->partnerable_id = $partnerFrench->id;
            $partner->partnerable_type = PartnerFrench::class;
            $partner->save();

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
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
