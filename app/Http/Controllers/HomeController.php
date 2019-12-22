<?php

namespace App\Http\Controllers;

use App\Mail\CallbackMessage;
use App\MessageFromCallback;
use App\Product;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

    public function catalog(Request $request)
    {
        if (isset($request->title)) {
            $products = Product::query()
                ->where('title', 'LIKE', "%{$request->title}%")
                ->orWhere('short_desc', 'LIKE', "%{$request->title}%")
                ->orWhere('meta', 'LIKE', "%{$request->title}%")
                ->orderBy('created_at');

        }else{
            $products = Product::orderBy('created_at');
        }

        if (isset($request->type_id)) {
            $products = $products->where('type_id', $request->type_id);
        }

        $products = $products->paginate(12);
        $types = Type::all();
        return view('catalog', [
            'products' => $products->appends(Input::except('page')),
            'types'    => $types,
        ]);
    }


    public function show(Product $product){

        return view('product', compact('product'));
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
            'g-recaptcha-response' => ['required', 'captcha']
        ]);

        $msg = new MessageFromCallback();
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->subject = $request->subject;
        $msg->message = $request->message;
        $msg->save();

        Mail::to(env('ADMIN_MAIL'))->send(new CallbackMessage($request));

        return back()->with('message', 'Вы успешно отправили письмо.');
    }
}
