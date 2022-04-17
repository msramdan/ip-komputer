<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginWebController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.login');
    }
}
