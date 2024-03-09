<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_list()
   
    {
        $categories=Category::all();
        return view('backend.pages.category.list',compact('categories'));
    }

    public function category_create()
    {
        return view('backend.pages.category.form');
    }

    public function category_store(Request $request)
    {
        Category::create([
            'name'=>$request->cat_name,
            'status'=>$request->cat_status,
            'description'=>$request->cat_description,
        ]);
        return redirect()->route('category.list');
    }
}
