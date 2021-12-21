<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Models\TrainingArabic;
use App\Models\TrainingEnglish;
use App\Models\TrainingFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrainingController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
    }

    public function index()
    {
        $training = "Configuration des partenaires";
        $trainingArabic = Training::where('trainingable_type', '=', TrainingArabic::class)->first();
        $trainingEnglish = Training::where('trainingable_type', '=', TrainingEnglish::class)->first();
        $trainingFrench = Training::where('trainingable_type', '=', TrainingFrench::class)->first();
        return view('admin.pages.training', compact('training', 'trainingArabic', 'trainingEnglish', 'trainingFrench'));
    }

    public function store(Request $request)
    {
        $latestTrainingArabic = TrainingArabic::latest()->first();
        $latestTrainingEnglish = TrainingEnglish::latest()->first();
        $latestTrainingFrench = TrainingFrench::latest()->first();
        // $this->validate(
        //     $request,
        //     [
        //         'training_ar' => 'required',
        //         'training_en' => 'required',
        //         'training_fr' => 'required',
        //     ],
        //     [
        //         'training.required' => "Ce champ est obligatoire."
        //     ]
        // );

        try {
            if ($latestTrainingArabic) {
                $training = Training::where('trainingable_type', '=', TrainingArabic::class)->where('trainingable_id', '=', $latestTrainingArabic->id)->first();

                $training->instruction_languages = $request->instruction_languages_ar;
                $training->program = $request->program_ar;
                $training->faculty = $request->faculty_ar;
                $training->job = $request->job_ar;
                $training->final_registration_fee = $request->final_registration_fee_ar;
                $training->annual_registration_period = $request->annual_registration_period_ar;
                $training->tuition_fees = $request->tuition_fees_ar;
                $training->scholarship = $request->scholarship_ar;
                $training->number_of_students = $request->number_of_students_ar;
                $training->target_social_category = $request->target_social_category_ar;
                $training->save();
            } else {
                $trainingArabic = new TrainingArabic();
                $trainingArabic->save();

                $training = new Training();
                $training->instruction_languages = $request->instruction_languages_ar;
                $training->program = $request->program_ar;
                $training->faculty = $request->faculty_ar;
                $training->job = $request->job_ar;
                $training->final_registration_fee = $request->final_registration_fee_ar;
                $training->annual_registration_period = $request->annual_registration_period_ar;
                $training->tuition_fees = $request->tuition_fees_ar;
                $training->scholarship = $request->scholarship_ar;
                $training->number_of_students = $request->number_of_students_ar;
                $training->target_social_category = $request->target_social_category_ar;
                $training->trainingable_id = $trainingArabic->id;
                $training->trainingable_type = TrainingArabic::class;
                $training->save();
            }

            if ($latestTrainingEnglish) {
                $training = Training::where('trainingable_type', '=', TrainingEnglish::class)->where('trainingable_id', '=', $latestTrainingEnglish->id)->first();

                $training->instruction_languages = $request->instruction_languages_en;
                $training->program = $request->program_en;
                $training->faculty = $request->faculty_en;
                $training->job = $request->job_en;
                $training->final_registration_fee = $request->final_registration_fee_en;
                $training->annual_registration_period = $request->annual_registration_period_en;
                $training->tuition_fees = $request->tuition_fees_en;
                $training->scholarship = $request->scholarship_en;
                $training->number_of_students = $request->number_of_students_en;
                $training->target_social_category = $request->target_social_category_en;
                $training->save();
            } else {
                $trainingEnglish = new TrainingEnglish();
                $trainingEnglish->save();

                $training = new Training();
                $training->instruction_languages = $request->instruction_languages_en;
                $training->program = $request->program_en;
                $training->faculty = $request->faculty_en;
                $training->job = $request->job_en;
                $training->final_registration_fee = $request->final_registration_fee_en;
                $training->annual_registration_period = $request->annual_registration_period_en;
                $training->tuition_fees = $request->tuition_fees_en;
                $training->scholarship = $request->scholarship_en;
                $training->number_of_students = $request->number_of_students_en;
                $training->target_social_category = $request->target_social_category_en;
                $training->trainingable_id = $trainingEnglish->id;
                $training->trainingable_type = TrainingEnglish::class;
                $training->save();
            }

            if ($latestTrainingFrench) {
                $training = Training::where('trainingable_type', '=', TrainingFrench::class)->where('trainingable_id', '=', $latestTrainingFrench->id)->first();

                $training->instruction_languages = $request->instruction_languages_fr;
                $training->program = $request->program_fr;
                $training->faculty = $request->faculty_fr;
                $training->job = $request->job_fr;
                $training->final_registration_fee = $request->final_registration_fee_fr;
                $training->annual_registration_period = $request->annual_registration_period_fr;
                $training->tuition_fees = $request->tuition_fees_fr;
                $training->scholarship = $request->scholarship_fr;
                $training->number_of_students = $request->number_of_students_fr;
                $training->target_social_category = $request->target_social_category_fr;
                $training->save();
            } else {
                $trainingFrench = new TrainingFrench();
                $trainingFrench->save();

                $training = new Training();
                $training->instruction_languages = $request->instruction_languages_fr;
                $training->program = $request->program_fr;
                $training->faculty = $request->faculty_fr;
                $training->job = $request->job_fr;
                $training->final_registration_fee = $request->final_registration_fee_fr;
                $training->annual_registration_period = $request->annual_registration_period_fr;
                $training->tuition_fees = $request->tuition_fees_fr;
                $training->scholarship = $request->scholarship_fr;
                $training->number_of_students = $request->number_of_students_fr;
                $training->target_social_category = $request->target_social_category_fr;
                $training->trainingable_id = $trainingFrench->id;
                $training->trainingable_type = TrainingFrench::class;
                $training->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            dd($e);
            Session::flash('error', "Erreur survenue lors de l'enregistrement d'un partenaire.");
        }
    }
}
