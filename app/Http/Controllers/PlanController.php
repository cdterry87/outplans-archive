<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function dashboard()
    {
        $plans_upcoming = auth()->user()->plans_upcoming()->paginate(5);
        $plans_invited = auth()->user()->plans_invited()->paginate(5);

        return view('dashboard', compact(['plans_upcoming', 'plans_invited']));
    }

    public function index()
    {
        $plans = auth()->user()->plans()->paginate(10);

        return view('plans.index', compact(['plans']));
    }

    public function show(Plan $plan)
    {
        return view('plans.show', compact(['plan']));
    }

    public function invites()
    {
        $received = auth()->user()->plans_invited()->paginate(10);
        $sent = auth()->user()->plans_invites()->paginate(10);

        return view('invites', compact(['received', 'sent']));
    }

    public function attended()
    {
        $attended = auth()->user()->plans_attended()->paginate(10);

        return view('attended', compact(['attended']));
    }
}
