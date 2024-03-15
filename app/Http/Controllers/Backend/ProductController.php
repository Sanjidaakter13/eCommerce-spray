<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function product_list()
   
    {
        $products=Product::with('category')->paginate(5);
        return view('backend.pages.product.list',compact('products'));
    }

    public function product_create()
    {
        $categories=Category::all();
        return view ('backend.pages.product.form',compact('categories'));
    }

    public function product_store(Request $request)
    {
        //dd($request->all());
        
        
        $validate=Validator::make($request->all(),[
    
            'category'=>'required',
            'pro_name'=>'required',
            'pro_price'=>'required|numeric|min:10',
            'pro_stock'=>'required|numeric',
      ]);

      if($validate->fails())
      {

        // notify()->error($validate->getMessageBag());
        // return redirect()->back();

        return redirect()->back()->withErrors($validate);
      }
        //migration_name::form_name
        Product::create([
            'name'=>$request->pro_name,
            'price'=>$request->pro_price,
            'stock'=>$request->pro_stock,
            'category_id'=>$request->category,
            'image'=>$request->pro_image,
            'status'=>$request->pro_status,
            'description'=>$request->pro_description,
        ]);
        notify()->success('Product created successffully');
            return redirect()->route('product.list');
        
        
        
    }
}
