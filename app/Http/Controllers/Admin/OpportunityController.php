<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use App\Models\OpportunityArabic;
use App\Models\OpportunityEnglish;
use App\Models\OpportunityFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OpportunityController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
        $this->middleware(['auth:admin']);
    }

    public function index()
    {
        $opportunity = "Configuration des partenaires";
        $opportunityArabic = Opportunity::where('opportunityable_type', '=', OpportunityArabic::class)->first();
        $opportunityEnglish = Opportunity::where('opportunityable_type', '=', OpportunityEnglish::class)->first();
        $opportunityFrench = Opportunity::where('opportunityable_type', '=', OpportunityFrench::class)->first();

        return view('admin.pages.partner', compact('partner', 'opportunityArabic', 'opportunityEnglish', 'opportunityFrench'));
    }

    public function store(Request $request)
    {
        $latestOpportunityArabic = OpportunityArabic::latest()->first();
        $latestOpportunityEnglish = OpportunityEnglish::latest()->first();
        $latestOpportunityFrench = OpportunityFrench::latest()->first();
       
        
        try {
            if ($latestOpportunityArabic) {
                $opportunity = Opportunity::where('opportunityable_type', '=', OpportunityArabic::class)->where('opportunityable_id', '=', $latestOpportunityArabic->id)->first();

                $opportunity->opportunity_information = $request->opportunity_information_ar;
                $opportunity->scholarship = $request->scholarship_ar;
                $opportunity->adapted_curricula = $request->adapted_curricula_ar;
                $opportunity->teaching_modality = $request->teaching_modality_ar;
                $opportunity->future_job = $request->future_job_ar;
                $opportunity->multimedia_center = $request->multimedia_center_ar;
                $opportunity->choice_partnership = $request->choice_partnership_ar;
                $opportunity->save();
            } else {
                $partnerArabic = new OpportunityArabic();
                $partnerArabic->save();

                $opportunity = new Opportunity();
                $opportunity->opportunity_information = $request->opportunity_information_ar;
                $opportunity->scholarship = $request->scholarship_ar;
                $opportunity->adapted_curricula = $request->adapted_curricula_ar;
                $opportunity->teaching_modality = $request->teaching_modality_ar;
                $opportunity->future_job = $request->future_job_ar;
                $opportunity->multimedia_center = $request->multimedia_center_ar;
                $opportunity->choice_partnership = $request->choice_partnership_ar;
                $opportunity->opportunityable_id = $partnerArabic->id;
                $opportunity->opportunityable_type = OpportunityArabic::class;
                $opportunity->save();
            }

            if ($latestOpportunityEnglish) {
                $opportunity = Opportunity::where('opportunityable_type', '=', OpportunityEnglish::class)->where('opportunityable_id', '=', $latestOpportunityEnglish->id)->first();

                $opportunity->opportunity_information = $request->opportunity_information_en;
                $opportunity->scholarship = $request->scholarship_en;
                $opportunity->adapted_curricula = $request->adapted_curricula_en;
                $opportunity->teaching_modality = $request->teaching_modality_en;
                $opportunity->future_job = $request->future_job_en;
                $opportunity->multimedia_center = $request->multimedia_center_en;
                $opportunity->choice_partnership = $request->choice_partnership_en;
                $opportunity->save();
            } else {
                $partnerEnglish = new OpportunityEnglish();
                $partnerEnglish->save();

                $opportunity = new Opportunity();
                $opportunity->opportunity_information = $request->opportunity_information_en;
                $opportunity->scholarship = $request->scholarship_en;
                $opportunity->adapted_curricula = $request->adapted_curricula_en;
                $opportunity->teaching_modality = $request->teaching_modality_en;
                $opportunity->future_job = $request->future_job_en;
                $opportunity->multimedia_center = $request->multimedia_center_en;
                $opportunity->choice_partnership = $request->choice_partnership_en;
                $opportunity->opportunityable_id = $partnerEnglish->id;
                $opportunity->opportunityable_type = OpportunityEnglish::class;
                $opportunity->save();
            }

            if ($latestOpportunityFrench) {
                $opportunity = Opportunity::where('opportunityable_type', '=', OpportunityFrench::class)->where('opportunityable_id', '=', $latestOpportunityFrench->id)->first();

                $opportunity->opportunity_information = $request->opportunity_information_fr;
                $opportunity->scholarship = $request->scholarship_fr;
                $opportunity->adapted_curricula = $request->adapted_curricula_fr;
                $opportunity->teaching_modality = $request->teaching_modality_fr;
                $opportunity->future_job = $request->future_job_fr;
                $opportunity->multimedia_center = $request->multimedia_center_fr;
                $opportunity->choice_partnership = $request->choice_partnership_fr;
                $opportunity->save();
            } else {
                $partnerFrench = new OpportunityFrench();
                $partnerFrench->save();

                $opportunity = new Opportunity();
                $opportunity->opportunity_information = $request->opportunity_information_fr;
                $opportunity->scholarship = $request->scholarship_fr;
                $opportunity->adapted_curricula = $request->adapted_curricula_fr;
                $opportunity->teaching_modality = $request->teaching_modality_fr;
                $opportunity->future_job = $request->future_job_fr;
                $opportunity->multimedia_center = $request->multimedia_center_fr;
                $opportunity->choice_partnership = $request->choice_partnership_fr;
                $opportunity->opportunityable_id = $partnerFrench->id;
                $opportunity->opportunityable_type = OpportunityFrench::class;
                $opportunity->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            dd($e);
            Session::flash('error', "Erreur survenue lors de l'enregistrement.");
        }
    }
}
