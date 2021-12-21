<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        // $this->middleware(['auth:admin','verified']);
    }

    public function index(){
        $dash = "Tableau de bord";
        return view('admin.pages.dashboard', compact('dash'));
    }
}
