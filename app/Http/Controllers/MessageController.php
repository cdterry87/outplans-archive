<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = auth()->user()->messages()->paginate(10);

        return view('messages', compact(['messages']));
    }
}
