<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeInfo(Request $request){
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back();
    }
    public function showMess(){
        $contacts=Contact::all();
        return view('admin.messages',compact('contacts'));
    }
    //
}
