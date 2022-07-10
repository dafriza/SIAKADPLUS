<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginProcess()
    {
        return view('Guest.auth.login');
    }
}
