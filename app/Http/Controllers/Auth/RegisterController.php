<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function redirectTo()
    {
        $guard = session("auth");
        if ($guard == 'admin') {
            return route('admin.dashboard');
        }
    }

    protected function guard()
    {
        if (request()->user_type == 'Admin') {
            session(["auth" => "admin"]);
            return Auth::guard("admin");
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (isset($data['user_type'])) {
            if ($data['user_type'] == 'Admin') {
                return Validator::make(
                    $data,
                    [
                        'last_name' => 'required|string|max:30',
                        'first_name' => 'required|string|max:100',
                        'email' => 'required|email',
                        'password' => 'required|string|min:8|confirmed'
                    ],
                    [
                        'last_name.required' => "Veuillez renseigner votre nom.",
                        'last_name.string' => "Le nom doit être une chaîne de caractères.",
                        'last_name.max' => "Le nom ne doit pas dépasser 30 caractères.",
                        'first_name.required' => "Veuillez renseigner au moins un prénom.",
                        'first_name.string' => "Le prénom doit être une chaîne de caractères.",
                        'first_name.max' => "Le prénom ne doit pas dépasser 100 caractères.",
                        'email.required' => "Veuillez entrer votre adresse email.",
                        'email.string' => "L'adresse email doit être une chaîne de caractères.",
                        'email.email' => "L'adresse email entrée est invalide.",
                        'password.required' => "Veuillez entrer votre mot de passe.",
                        'password.string' => "Le mot de passe doit être une chaîne de caractères.",
                        'password.min' => "Le mot de passe doit contenir au moins 8 caractères.",
                        'password.confirmed' => "Veuillez entrer le même mot de passe pour le confirmer.",
                    ]
                );
            }
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $lastUser = User::latest()->first();

        $user = new User();
        if (isset($data['user_type'])) {
            if ($data['user_type'] == 'Admin') {
                $user->name =  $data['first_name'] . ' ' . $data['last_name'];
            }
        }
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->user_type = $data['user_type'];
        if ($lastUser) {
            $user->token = Crypt::encrypt($user->name . '@$@' . $lastUser->id + 1, '');
        } else {
            $user->token = Crypt::encrypt($user->name . '@$@' . 1, '');
        }
        $user->save();

        if (isset($data['user_type'])) {
            if ($data['user_type'] == 'Admin') {
                $administrator = new Administrator();
                $administrator->last_name = $data['last_name'];
                $administrator->first_name = $data['first_name'];
                $administrator->user_id = $user->id;
                $administrator->save();
            }
        }

        return $user;
    }
}
