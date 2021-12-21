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
        $admissions = Admission::all();
        return view('admin.pages.admission_requirement', compact('admission', 'admissions'));
    }

    public function store(Request $request)
    {
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
            $admissionArabic = new AdmissionArabic();
            $admissionArabic->save();

            $admission = new Admission();
            $admission->annual_registration_period = $request->annual_registration_period_ar;
            $admission->general_requirement = $request->general_requirement_ar;
            $admission->documents_to_provide = $request->documents_to_provide_ar;
            $admission->assessment_test = $request->assessment_test_ar;
            $admission->compulsory_fees = $request->compulsory_fees_ar;
            $admission->admission_requirementable_id = $admissionArabic->id;
            $admission->admission_requirementable_type = AdmissionArabic::class;
            $admission->save();


            $admissionEnglish = new AdmissionEnglish();
            $admissionEnglish->save();

            $admission = new Admission();
            $admission->annual_registration_period = $request->annual_registration_period_en;
            $admission->general_requirement = $request->general_requirement_en;
            $admission->documents_to_provide = $request->documents_to_provide_en;
            $admission->assessment_test = $request->assessment_test_en;
            $admission->compulsory_fees = $request->compulsory_fees_en;
            $admission->admission_requirementable_id = $admissionEnglish->id;
            $admission->admission_requirementable_type = AdmissionEnglish::class;
            $admission->save();


            $admissionFrench = new AdmissionFrench();
            $admissionFrench->save();

            $admission = new Admission();
            $admission->annual_registration_period = $request->annual_registration_period_fr;
            $admission->general_requirement = $request->general_requirement_fr;
            $admission->documents_to_provide = $request->documents_to_provide_fr;
            $admission->assessment_test = $request->assessment_test_fr;
            $admission->compulsory_fees = $request->compulsory_fees_fr;
            $admission->admission_requirementable_id = $admissionFrench->id;
            $admission->admission_requirementable_type = AdmissionFrench::class;
            $admission->save();

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
