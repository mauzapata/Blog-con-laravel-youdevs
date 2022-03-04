<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function __construc()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //dd(\App\Models\Models\Category::all());

        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        $newCategory = new Category();

        $newCategory->name = $request->name;
        $newCategory->save();


        return redirect()->back();
    }
}
