<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maraq;
use Validator;
class InterestController extends Controller
{
    public function index()
    {
        $interestes = Maraq::orderByDesc('created_at')->get();
        return view('back.interest.interest',compact('interestes'));
    }
    public function create()
    {
        return view('back.interest.create');
    }
    public function created(Request $request)
    {
        $validator = validator::make($request->all(),[
            'name'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only('name');
        $interest = Maraq::create($data);
        return redirect()->route('yonetim.interest')->with('success','Interest eklendi');
    }
    public function update($id)
    {
        $interest = Maraq::find($id);
        return view('back.interest.update',compact('interest'));
    }
    public function updated(Request $request,$id)
    {
        $data = $request->only('name');
        $interest = Maraq::where('id',$id)->firstOrFail();
        $interest->update($data);
        return redirect()->back()->with('success','Interest guncellendi');
    }
    public function delete($id)
    {
        $interest = Maraq::find($id);
        $interest->delete();
        return redirect()->route('yonetim.interest')->with('success','Interest silindi');
    }
}
