<?php

namespace App\Http\Controllers;

use App\Mail\CallbackMessage;
use App\MessageFromCallback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function callbacks()
    {
        $callBacks = MessageFromCallback::all()->sortByDesc('created_at');
        return view('admin.callbacks.index', compact('callBacks'));
    }
}
