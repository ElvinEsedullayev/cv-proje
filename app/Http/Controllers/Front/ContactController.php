<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maraq;
use App\Models\Language;
use App\Models\User;
use App\Models\Social;

use App\Models\Contact;
use Validator;
class ContactController extends Controller
{
        public function index()
    {
        $interest = Maraq::all();
        $language = Language::all();
        $user = User::with('detail')->first();
        $socials = Social::all();
       
        return view('front.contact',compact('interest','language','user','socials'));
    }
    public function send_message(Request $request)
    {
        $validator = Validator::make($request->post(),[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->route('contact')->withErrors($validator)->withInput();
        }
        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->route('contact')->with('success','Tebrik edirik! Mesajiniz ugurlu sekilde gonderildi');
    }
}
