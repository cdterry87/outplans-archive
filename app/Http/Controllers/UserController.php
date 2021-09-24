<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function invites()
    {
        return view('dashboard');
    }

    public function attended()
    {
        return view('dashboard');
    }
}
