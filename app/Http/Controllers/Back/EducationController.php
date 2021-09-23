<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

use Validator;
class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::orderByDesc('id')->get();
        return view('back.education.education',compact('educations'));
    }

    public function create()
    {
        return view('back.education.create');
    }
    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'specialty'=>'required',
            'uni'=>'required',
            'description'=>'required',
            'status'=>'required',
            'date'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only(['specialty','uni','description','date','status']);
        Education::create($data);
        return redirect()->route('yonetim.education')->with('success','Education eklendi');
    }


    public function update($id)
    {
        $education = Education::find($id);
        return view('back.education.update',compact('education'));
    }

    public function updated(Request $request,$id)
    {
        $data = $request->only(['specialty','uni','description','date','status']);
        $education = Education::where('id',$id)->firstOrFail();
        $education->update($data);
        return redirect()->back()->with('success','Education guncellendi');
    }

    public function delete($id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->route('yonetim.education')->with('success','Education silindi');
    }
}
