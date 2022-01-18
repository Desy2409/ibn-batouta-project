<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loadRegisterFromToken(Request $request)
    {
        $sender = User::where('token', $request->token)->first();

        if ($sender != null && $sender->token != null && $sender->token == $request->token) {
            return view('auth.register_admin');
        } else {
            return view('admin.pages.error-404');
        }
    }

    public function contactNotification()
    {
        return auth()->user()->unreadNotifications;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'last_name' => 'required',
            'first_name' => 'required',
            'phone_number1' => 'required',
            'addresse' => 'max:255'
        ], [
            'last_name.required' => "Le champ nom est obligatoire.",
            'last_name.required' => "Le nom est obligatoire.",
            'first_name.required' => "Le champ prénom(s) est obligatoire.",
            'phone_number1.required' => "Le champ N° Téléphone est obligatoire.",
            'address.required' => "Le champ adresse ne doit pas dépasser 255 caractères .",
        ]);
    }

    public function update()
    {
    }
}
