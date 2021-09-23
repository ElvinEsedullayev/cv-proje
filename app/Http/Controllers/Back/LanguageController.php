<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Validator;
class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::orderByDesc('created_at')->get();
        return view('back.language.language',compact('languages'));
    }
    public function create()
    {
        return view('back.language.create');
    }
    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'seviyye'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only(['name','seviyye']);
        $language = Language::create($data);
        return redirect()->route('yonetim.language')->with('success','Language eklendi');
    }

    public function update($id)
    {
        $language = Language::find($id);
        return view('back.language.update',compact('language'));
    }
    public function updated(Request $request,$id)
    {
        $data = $request->only(['name','seviyye']);
        $language = Language::where('id',$id)->firstOrFail();
        $language->update($data);
        return redirect()->back()->with('success','Language guncellendi');
    }
    public function delete($id)
    {
        $language = Language::find($id);
        $language->delete();
        return redirect()->route('yonetim.language')->with('success','Language silindi');
    }
}
