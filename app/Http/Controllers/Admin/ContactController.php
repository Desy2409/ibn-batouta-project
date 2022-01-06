<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactArabic;
use App\Models\ContactEnglish;
use App\Models\ContactFrench;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth:admin','verified']);
    }

    public function index()
    {
        $contact = "Configuration des partenaires";
        $contactArabic = Contact::where('contactable_type', '=', ContactArabic::class)->first();
        $contactEnglish = Contact::where('contactable_type', '=', ContactEnglish::class)->first();
        $contactFrench = Contact::where('contactable_type', '=', ContactFrench::class)->first();

        return view('admin.pages.contact', compact('contact', 'contactArabic', 'contactEnglish', 'contactFrench'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $latestContactArabic = ContactArabic::latest()->first();
        $latestContactEnglish = ContactEnglish::latest()->first();
        $latestContactFrench = ContactFrench::latest()->first();
        // $this->validate(
        //     $request,
        //     [
        //         'contact_ar' => 'required',
        //         'contact_en' => 'required',
        //         'contact_fr' => 'required',
        //     ],
        //     [
        //         'contact.required' => "Ce champ est obligatoire."
        //     ]
        // );

        try {
            if ($latestContactArabic) {
                $contact = Contact::where('contactable_type', '=', ContactArabic::class)->where('contactable_id', '=', $latestContactArabic->id)->first();

                $contact->address = $request->address_ar;
                $contact->save();
            } else {
                $contactArabic = new ContactArabic();
                $contactArabic->save();

                $contact = new Contact();
                $contact->address = $request->address_ar;
                $contact->contactable_id = $contactArabic->id;
                $contact->contactable_type = ContactArabic::class;
                $contact->save();
            }

            if ($latestContactEnglish) {
                $contact = Contact::where('contactable_type', '=', ContactEnglish::class)->where('contactable_id', '=', $latestContactEnglish->id)->first();

                $contact->address = $request->address_en;
                $contact->save();
            } else {
                $contactEnglish = new ContactEnglish();
                $contactEnglish->save();

                $contact = new Contact();
                $contact->address = $request->address_en;
                $contact->contactable_id = $contactEnglish->id;
                $contact->contactable_type = ContactEnglish::class;
                $contact->save();
            }

            if ($latestContactFrench) {
                $contact = Contact::where('contactable_type', '=', ContactFrench::class)->where('contactable_id', '=', $latestContactFrench->id)->first();

                $contact->address = $request->address_fr;
                $contact->save();
            } else {
                $contactFrench = new ContactFrench();
                $contactFrench->save();

                $contact = new Contact();
                $contact->address = $request->address_fr;
                $contact->contactable_id = $contactFrench->id;
                $contact->contactable_type = ContactFrench::class;
                $contact->save();
            }

            Session::flash('success', "Enregistrement effectué avec succès.");

            return redirect()->back()->withInput();
        } catch (Exception $e) {
            dd($e);
            Session::flash('error', "Erreur survenue lors de l'enregistrement.");
        }
    }
}
