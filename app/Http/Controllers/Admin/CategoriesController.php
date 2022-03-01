<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        dd($request->category);
        dd($request->all());
    }
}
