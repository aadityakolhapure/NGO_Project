<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NGOController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }
    public function dashboard()
    {
        return view('NGO.dashboard');
    }
}
