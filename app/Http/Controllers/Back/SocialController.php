<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use Validator;
class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::orderByDesc('created_at')->get();
        return view('back.socials.social',compact('socials'));
    }
    public function create()
    {
        return view('back.socials.create');
    }
    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'link'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only(['name','link']);
        $social = Social::create($data);
        return redirect()->route('yonetim.social')->with('success','Social eklendi'); 
    }
    public function update($id)
    {
        $social = Social::find($id);
        return view('back.socials.update',compact('social'));
    }
    public function updated(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'link'=>'required'
        ]);
        $data = $request->only(['name','link']);
        $social = Social::where('id',$id)->firstOrFail();
        $social->update($data);
        return redirect()->back()->with('success','Social guncellendi');
    }
    public function delete($id)
    {
        $social = Social::find($id);
        $social->delete();
        return redirect()->route('yonetim.social')->with('success','Social silindi');
    }
}
