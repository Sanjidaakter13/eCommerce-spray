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
        $categories=Category::orderBy('id', 'asc')->paginate(5);
        return view('backend.pages.category.list',compact('categories'));
    }

    public function category_create()
    {
        return view('backend.pages.category.form');
    }

    public function category_store(Request $request)
    {
        //dd($request->all());

        $filerename=null;

          if($request->hasFile('cat_image'))
          {
              $file=$request->file('cat_image');
              $filerename="category_".rand(0,100000).date('Ymdhis').".".$file->getClientOriginalExtension();
              $file->storeAs('uploads\categories',$filerename);
          }
        
        //$request->validate(['category_name'=>'required|unique:categories,name',]);

        $val=Validator::make($request->all(),[
            'name'=>'required',
        ]);
        //migration_name::form_name
        Category::create([
            'name'=>$request->cat_name,
            'image'=>$filerename,
            'status'=>$request->cat_status,
            'description'=>$request->cat_description,
        ]);
        notify()->success('Category created successffully');
            return redirect()->route('category.list');
        
        
        
    }

    public function category_delete($id){
        Category::find($id)->delete();

        return redirect()->back();
    }

    public function category_view($id)
    {
        $category= Category::find($id);
       
        // dd($category);
        return view ('backend.pages.category.view', compact('category'));
    }

    public function category_edit($id)
    {
        $category= Category::find($id);
       
        // dd($category);
        return view ('backend.pages.category.edit', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        $category=Category::find($id);
        
        $filerename=null;

          if($request->hasFile('cat_image'))
          {
              $file=$request->file('cat_image');
              $filerename="category_".rand(0,100000).date('Ymdhis').".".$file->getClientOriginalExtension();
              $file->storeAs('uploads\categories',$filerename);
          }
        
        
        //dd($category);
        $category->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$filerename,
        ]);

        return redirect()->route('category.list');
    }
}
