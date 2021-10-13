<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $friends = auth()->user()->friends()->get();
        $invites = auth()->user()->friends_invites()->get();

        return view('dashboard', compact(['friends', 'invites']));
    }
}
