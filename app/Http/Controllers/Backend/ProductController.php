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
        $products=Product::with('category')->orderBy('id','desc')->paginate(5);

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
         
          $filerename=null;

          if($request->hasFile('pro_image'))
          {
              $file=$request->file('pro_image');
              $filerename="product_".rand(0,100000).date('Ymdhis').".".$file->getClientOriginalExtension();
              $file->storeAs('uploads\products',$filerename);
          }
        
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
            'image'=>  $filerename,
            'status'=>$request->pro_status,
            'description'=>$request->pro_description,
        ]);
        notify()->success('Product created successffully');
            return redirect()->route('product.list');  
    }

    public function product_delete($id){
        Product::find($id)->delete();

        return redirect()->back();
    }

    public function product_view($id)
    {
        $product=Product::find($id);
        // dd($product);
        return view ('backend.pages.product.view', compact('product'));
    }

    public function product_edit($id)
    {
        $product=Product::find($id);
        $categories=Category::all();

        // dd($product);
        return view ('backend.pages.product.edit', compact('product','categories'));
    }

    public function product_update(Request $request, $id)
    {
        
        $product=Product::find($id);
        //dd($product);
        $filerename=null;

        if($request->hasFile('pro_image'))
        {
            $file=$request->file('pro_image');
            $filerename="product_".rand(0,100000).date('Ymdhis').".".$file->getClientOriginalExtension();
            $file->storeAs('uploads\products',$filerename);
        }
       
        $product->update([
            'name'=>$request->pro_name,
            'price'=>$request->pro_price,
            'stock'=>$request->pro_stock,
            'category_id'=>$request->category,
            'image'=>  $filerename,
            'status'=>$request->pro_status,
            'description'=>$request->pro_description,
        ]);

        return redirect()->route('product.list');
    }

}
