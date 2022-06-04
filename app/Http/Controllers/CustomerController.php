<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function showContact(){
        return view('contactUs');
    }
    public function sendInfo(Request $request){
        $customer=new Customer;
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->address=$request->address;
        $customer->city=$request->city;
        $customer->country=$request->country;
        $customer->telephone=$request->tel;
        $customer->message=$request->message;
        $customer->created_at=now();
        $customer->updated_at=now();

        $customer->save();
        return redirect()->back();
    }
    //
}
