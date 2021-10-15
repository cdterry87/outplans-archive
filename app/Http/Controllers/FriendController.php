<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $friends = auth()->user()->friends_with_details()->paginate(10);
        $invites_received = auth()->user()->friends_invites_received_with_details()->paginate(10);
        $invites_sent = auth()->user()->friends_invites_sent_with_details()->paginate(10);

        return view('friends', compact(['friends', 'invites_received', 'invites_sent']));
    }
}
