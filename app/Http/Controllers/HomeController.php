<?php

namespace App\Http\Controllers;

use App\Mail\CallbackMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        View::share('route', $route = Route::currentRouteName());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function callback(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required' , 'captcha']
        ]);


        Mail::to(env('ADMIN_MAIL'))->send(new CallbackMessage($request));

        return back()->with('message', 'Вы успешно отправили письмо.');
    }
}
