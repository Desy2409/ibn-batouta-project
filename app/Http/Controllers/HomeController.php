<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutArabic;
use App\Models\AboutEnglish;
use App\Models\AboutFrench;
use App\Models\Admission;
use App\Models\AdmissionArabic;
use App\Models\AdmissionEnglish;
use App\Models\AdmissionFrench;
use App\Models\Contact;
use App\Models\ContactArabic;
use App\Models\ContactEnglish;
use App\Models\ContactFrench;
use App\Models\Information;
use App\Models\InformationArabic;
use App\Models\InformationEnglish;
use App\Models\InformationFrench;
use App\Models\Opportunity;
use App\Models\OpportunityArabic;
use App\Models\OpportunityEnglish;
use App\Models\OpportunityFrench;
use App\Models\Partner;
use App\Models\PartnerArabic;
use App\Models\PartnerEnglish;
use App\Models\PartnerFrench;
use App\Models\Training;
use App\Models\TrainingArabic;
use App\Models\TrainingEnglish;
use App\Models\TrainingFrench;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // dd();

        $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        // dd($locale);

        // dd();

        switch ($locale) {
            case 'fr':
                return view('home_fr', $this->returnFrenchValues());
                break;

            case 'en':
                return view('home_en', $this->returnEnglishValues());
                break;

            case 'ar':
                return view('home_ar', $this->returnArabicValues());
                break;

            default:
                return view('home_fr', $this->returnFrenchValues());
                break;
        }
    }

    public function translateInArabic()
    {
        // dd('translateInArabic');

        return view('home_ar', $this->returnArabicValues());
    }
    public function translateInEnglish()
    {
        // dd('translateInEnglish');

        return view('home_en', $this->returnEnglishValues());
    }
    public function translateInFrench()
    {
        // dd('translateInFrench');

        return view('home_fr', $this->returnFrenchValues());
    }



    private function returnFrenchValues()
    {
        $about = About::where('aboutable_type', '=', AboutFrench::class)->first();
        $partner = Partner::where('partnerable_type', '=', PartnerFrench::class)->first();
        $admission = Admission::where('admissionable_type', '=', AdmissionFrench::class)->first();
        $contact = Contact::where('contactable_type', '=', ContactFrench::class)->first();
        $information = Information::where('informationable_type', '=', InformationFrench::class)->first();
        $training = Training::where('trainingable_type', '=', TrainingFrench::class)->first();
        $opportunity = Opportunity::where('opportunityable_type', '=', OpportunityFrench::class)->first();

        return [
            'about' => $about, 'partner' => $partner,
            'admission' => $admission, 'contact' => $contact, 
            'information' => $information, 'training' => $training,
            'opportunity'=>$opportunity
        ];
    }

    private function returnEnglishValues()
    {
        $about = About::where('aboutable_type', '=', AboutEnglish::class)->first();
        $partner = Partner::where('partnerable_type', '=', PartnerEnglish::class)->first();
        $admission = Admission::where('admissionable_type', '=', AdmissionEnglish::class)->first();
        $contact = Contact::where('contactable_type', '=', ContactEnglish::class)->first();
        $information = Information::where('informationable_type', '=', InformationEnglish::class)->first();
        $training = Training::where('trainingable_type', '=', TrainingEnglish::class)->first();
        $opportunity = Opportunity::where('opportunityable_type', '=', OpportunityEnglish::class)->first();

        return [
            'about' => $about, 'partner' => $partner,
            'admission' => $admission, 'contact' => $contact, 
            'information' => $information, 'training' => $training,
            'opportunity'=>$opportunity
        ];
    }

    private function returnArabicValues()
    {
        $about = About::where('aboutable_type', '=', AboutArabic::class)->first();
        $partner = Partner::where('partnerable_type', '=', PartnerArabic::class)->first();
        $admission = Admission::where('admissionable_type', '=', AdmissionArabic::class)->first();
        $contact = Contact::where('contactable_type', '=', ContactArabic::class)->first();
        $information = Information::where('informationable_type', '=', InformationArabic::class)->first();
        $training = Training::where('trainingable_type', '=', TrainingArabic::class)->first();
        $opportunity = Opportunity::where('opportunityable_type', '=', OpportunityArabic::class)->first();

        return [
            'about' => $about, 'partner' => $partner,
            'admission' => $admission, 'contact' => $contact, 
            'information' => $information, 'training' => $training,
            'opportunity'=>$opportunity
        ];
    }
}
