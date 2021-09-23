<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use Validator;
class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderByDesc('id')->get();
        return view('back.experience.experience',compact('experiences'));
    }
    public function create()
    {
        return view('back.experience.create');
    }

    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'work'=>'required',
            'factory'=>'required',
            'description'=>'required',
            'date'=>'required',
            'status'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only(['work','factory','description','date','status']);
        Experience::create($data);
        return redirect()->route('yonetim.experience')->with('success','Experience eklendi');
    }

    public function update($id)
    {
        $experience = Experience::find($id);
        return view('back.experience.update',compact('experience'));
    }

    public function updated(Request $request,$id)
    {
        $data = $request->only(['work','factory','description','date','status']);
        $experience = Experience::where('id',$id)->firstOrFail();
        $experience->update($data);
        return redirect()->back()->with('success','Experience guncellendi');
    }

    public function delete($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('yonetim.experience')->with('success','Experience silindi');
    }
}
