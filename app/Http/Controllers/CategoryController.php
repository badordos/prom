<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Type::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Type();
        $category->title = $request->title;
        $category->active = $request->active == 'Да' ? 1 : 0;

        $category->save();

        return redirect(route('categories.index'))->with('message', 'Успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('categories.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $category)
    {
        return view('admin.categories.create', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $category)
    {
        $category->title = $request->title;
        $category->active = $request->active == 'Да' ? 1 : 0;

        $category->save();

        return redirect(route('categories.index'))->with('message', 'Успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $category)
    {
        $category->delete();

        return redirect(route('categories.index'))->with('message', 'Успешно удален');
    }
}
