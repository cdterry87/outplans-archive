<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function dashboard()
    {
        $plans = auth()->user()->plans()->get();
        $plans_invited = auth()->user()->plans_invited()->get();

        return view('dashboard', compact(['plans', 'plans_invited']));
    }

    public function index()
    {
        $plans = auth()->user()->plans()->get();

        return view('plans', compact(['plans']));
    }

    public function invites()
    {
        $received = auth()->user()->plans_invited()->get();
        $sent = auth()->user()->plans_invites()->get();

        return view('invites', compact(['received', 'sent']));
    }

    public function attended()
    {
        $attended = auth()->user()->plans_attended()->get();

        return view('attended', compact(['attended']));
    }
}
