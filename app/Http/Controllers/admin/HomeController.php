<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{   public function __contructor() {
        if (Auth::guest()) {
            return redirect()->intended('/login');
        }
    }
    public function getIndex() {
        return view('backend/home');
    }
}
