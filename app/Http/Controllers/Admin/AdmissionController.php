<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\AdmissionArabic;
use App\Models\AdmissionEnglish;
use App\Models\AdmissionFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdmissionController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
    }

    public function index()
    {
        $admission = "Configuration des partenaires";
        $admissionArabic = Admission::where('admissionable_type', '=', AdmissionArabic::class)->first();
        $admissionEnglish = Admission::where('admissionable_type', '=', AdmissionEnglish::class)->first();
        $admissionFrench = Admission::where('admissionable_type', '=', AdmissionFrench::class)->first();

        return view('admin.pages.admission_requirement', compact('admission', 'admissionArabic', 'admissionEnglish', 'admissionFrench'));
    }

    public function store(Request $request)
    {
        $latestAdmissionArabic = AdmissionArabic::latest()->first();
        $latestAdmissionEnglish = AdmissionEnglish::latest()->first();
        $latestAdmissionFrench = AdmissionFrench::latest()->first();
        // $this->validate(
        //     $request,
        //     [
        //         'admission_ar' => 'required',
        //         'admission_en' => 'required',
        //         'admission_fr' => 'required',
        //     ],
        //     [
        //         'admission.required' => "Ce champ est obligatoire."
        //     ]
        // );

        try {
            if ($latestAdmissionArabic) {
                $admission = Admission::where('admissionable_type', '=', AdmissionArabic::class)->where('admissionable_id', '=', $latestAdmissionArabic->id)->first();
                
                $admission->annual_registration_period = $request->annual_registration_period_ar;
                $admission->general_requirement = $request->general_requirement_ar;
                $admission->documents_to_provide = $request->documents_to_provide_ar;
                $admission->assessment_test = $request->assessment_test_ar;
                $admission->compulsory_fees = $request->compulsory_fees_ar;
                $admission->save();
            } else {
                $admissionArabic = new AdmissionArabic();
                $admissionArabic->save();

                $admission = new Admission();
                $admission->annual_registration_period = $request->annual_registration_period_ar;
                $admission->general_requirement = $request->general_requirement_ar;
                $admission->documents_to_provide = $request->documents_to_provide_ar;
                $admission->assessment_test = $request->assessment_test_ar;
                $admission->compulsory_fees = $request->compulsory_fees_ar;
                $admission->admissionable_id = $admissionArabic->id;
                $admission->admissionable_type = AdmissionArabic::class;
                $admission->save();
            }

            if ($latestAdmissionEnglish) {
                $admission = Admission::where('admissionable_type', '=', AdmissionEnglish::class)->where('admissionable_id', '=', $latestAdmissionEnglish->id)->first();

                $admission->annual_registration_period = $request->annual_registration_period_en;
                $admission->general_requirement = $request->general_requirement_en;
                $admission->documents_to_provide = $request->documents_to_provide_en;
                $admission->assessment_test = $request->assessment_test_en;
                $admission->compulsory_fees = $request->compulsory_fees_en;
                $admission->save();
            } else {
                $admissionEnglish = new AdmissionEnglish();
                $admissionEnglish->save();

                $admission = new Admission();
                $admission->annual_registration_period = $request->annual_registration_period_en;
                $admission->general_requirement = $request->general_requirement_en;
                $admission->documents_to_provide = $request->documents_to_provide_en;
                $admission->assessment_test = $request->assessment_test_en;
                $admission->compulsory_fees = $request->compulsory_fees_en;
                $admission->admissionable_id = $admissionEnglish->id;
                $admission->admissionable_type = AdmissionEnglish::class;
                $admission->save();
            }

            if ($latestAdmissionFrench) {
                $admission = Admission::where('admissionable_type', '=', AdmissionFrench::class)->where('admissionable_id', '=', $latestAdmissionFrench->id)->first();

                $admission->annual_registration_period = $request->annual_registration_period_fr;
                $admission->general_requirement = $request->general_requirement_fr;
                $admission->documents_to_provide = $request->documents_to_provide_fr;
                $admission->assessment_test = $request->assessment_test_fr;
                $admission->compulsory_fees = $request->compulsory_fees_fr;
                $admission->save();
            } else {
                $admissionFrench = new AdmissionFrench();
                $admissionFrench->save();

                $admission = new Admission();
                $admission->annual_registration_period = $request->annual_registration_period_fr;
                $admission->general_requirement = $request->general_requirement_fr;
                $admission->documents_to_provide = $request->documents_to_provide_fr;
                $admission->assessment_test = $request->assessment_test_fr;
                $admission->compulsory_fees = $request->compulsory_fees_fr;
                $admission->admissionable_id = $admissionFrench->id;
                $admission->admissionable_type = AdmissionFrench::class;
                $admission->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            dd($e);
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
