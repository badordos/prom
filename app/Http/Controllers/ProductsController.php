<?php

namespace App\Http\Controllers;

use App\Product;
use App\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.products.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->type_id = $request->type_id;
        $product->short_desc = $request->short_desc;
        $product->desc = $request->desc;
        $product->meta = $request->meta ?? '';

        $product->save();

        $product->addMediaFromRequest('image')->usingFileName(str_slug($request->image->getClientOriginalName()))
            ->preservingOriginal()->toMediaCollection('image');

        return redirect(route('products.index'))->with('message', 'Успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('products.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $types = Type::all();
        return view('admin.products.create', compact('types', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->type_id = $request->type_id;
        $product->short_desc = $request->short_desc;
        $product->desc = $request->desc;
        $product->meta = $request->meta ?? '';

        $product->update();

        if (isset($request->image)) {
            $product->clearMediaCollection('image');
            $product->addMediaFromRequest('image')->usingFileName(str_slug($request->image->getClientOriginalName()))
                ->preservingOriginal()->toMediaCollection('image');
        }

        return redirect(route('products.index'))->with('message', 'Успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'))->with('message', 'Успешно удален');
    }
}
