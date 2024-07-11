<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function registration()
    {

        return view('frontend.pages.registration');

    }


    public function store(Request $request)
    {
        // dd($request->all());

        Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        notify()->success('Customer Registration successful.');
        return redirect()->route('home');
    }


    public function login()
    {
        return view('frontend.pages.customer-login');
    }


    public function doLogin(Request $request){
       //dd($request->all());
        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if($val->fails())
        {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $user=Auth::guard('customerGuard')->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        notify()->error('Invalid Credentials.');
        return redirect()->back();

        return redirect()->route('home');

       


    }


    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');    
        return redirect()->route('home');
    }
}
