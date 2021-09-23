<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Validator;
class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skill::get();
        return view('back.skill.skill',compact('skills'));
    }
    public function create()
    {
        return view('back.skill.create');
    }

    public function created(Request $request)
    {
        $validator = Validator::make($request->post(),[
            'name'=>'required',
            'faiz'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only(['name','faiz']);
        Skill::create($data);
        return redirect()->route('yonetim.skill')->with('success','Skill eklendi');
    }

    public function update($id)
    {
        $skill = Skill::find($id);
        return view('back.skill.update',compact('skill'));
    }

    public function updated(Request $request,$id)
    {
        $data = $request->only(['name','faiz']);
        $skill = Skill::where('id',$id)->firstOrFail();
        $skill->update($data);
        return redirect()->back()->with('success','Skill guncellendi');
    }

    public function delete($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('yonetim.skill')->with('success','Skill silindi');
    }
}
