<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

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
        //dd($request->all());
        //$request->validate(['category_name'=>'required|unique:categories,name',]);

        // $request->validate([
        //     'name' => 'required',
        // ]);

        $val=Validator::make($request->all(),[
            'name'=>'required',
        ]);

        Category::create([
            'name'=>$request->cat_name,
            'status'=>$request->cat_status,
            'description'=>$request->cat_description,
        ]);
        notify()->success('Category created successffully');
            return redirect()->route('category.list');
        
        
        
    }
}
