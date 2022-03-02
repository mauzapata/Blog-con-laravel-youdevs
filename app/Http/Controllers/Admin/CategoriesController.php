<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Category;


class CategoriesController extends Controller
{
    public function __construc()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('admin.categories.index');
    }

    public function store(Request $request)
    {
        $newCategory = new Category();

        $newCategory->name = $request->name;

        dd($request->category);
        dd($request->all());
    }
}
