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
        View::share('route', $route = Route::currentRouteName());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Проминдустрия - производство и продажа металлоконструкций в Екатеринбурге.';
        $desc = 'Проминдустрия - производство и продажа металлоконструкций в Екатеринбурге.';
        $types = Type::where('active', 1)->get();
        $typesGroups = $types->chunk(4);
        return view('index', compact('title', 'types', 'typesGroups', 'desc'));
    }

    public function catalog(Type $type = null)
    {
        $title = 'Каталог продукции ООО "ПРОМИНДУСТРИЯ"';

        $products = collect();
        $desc = null;
        if ($type) {
            $products = Product::orderBy('created_at')
                ->where('type_id', $type->id)
                ->get();
            $desc = $type->desc;
        }

        $types = Type::where('active', 1)->get();
        return view('catalog', compact('types', 'type', 'products', 'title', 'desc'));
    }

    public function search(Request $request)
    {
        $title = 'Поиск по каталогу продукции ООО "ПРОМИНДУСТРИЯ"';

        if (isset($request->title)) {
            $products = Product::query()
                ->where('title', 'LIKE', "%{$request->title}%")
                ->orWhere('short_desc', 'LIKE', "%{$request->title}%")
                ->orWhere('meta', 'LIKE', "%{$request->title}%")
                ->orderBy('created_at');

        } else {
            $products = Product::orderBy('created_at');
        }

        if (isset($request->type_id)) {
            $products = $products->where('type_id', $request->type_id);
        }

        $products = $products->paginate(12);
        $types = Type::all();
        return view('search', [
            'products' => $products->appends(Input::except('page')),
            'types' => $types,
            'title' => $title,
        ]);
    }


    public function show(Type $type, Product $product)
    {
        $title = $product->title;
        $desc = $product->title;
        return view('product', compact('product', 'title', 'desc', 'type'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $title = $desc = 'Оставить заявку в ООО "Проминдустрия" Екатеринбург';
        return view('contact', compact('title', 'desc'));
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

        Mail::to(env('MAIN_MAIL'))->send(new CallbackMessage($request));

        return back()->with('message', 'Вы успешно отправили письмо.');
    }
}
