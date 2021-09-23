<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Validator;
class PortController extends Controller
{
    public function index()
    {
        $portfolies = Portfolio::orderByDesc('id')->get();
        return view('back.portfolio.portfolio',compact('portfolies'));
    }

    public function create()
    {
        return view('back.portfolio.create');
    }
    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'project_name'=>'required',
            'author'=>'required',
            'skill'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //$data = $request->only(['project_name','author','skill','image']);
        //$portfolio=Portfolio::create($data);
        $portfolio = new Portfolio;
        if($request->hasFile('image')){
            $validator = Validator::make($request->post(),[
                'image'=>'required|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $portfolioImage = $request->file('image');
            $portfolioImage = $request->image;
            $imageName = $portfolio->id. '.'. time() .'.'.$portfolioImage->extension();
            if($portfolioImage->isValid()){
                $portfolioImage->move('uploads/portfolio',$imageName);
              $portfolio = Portfolio::updateOrCreate(['project_name'=>$request->post('project_name'),'author'=>$request->post('author'),'skill'=>$request->post('skill'),'image'=>$imageName]);
            }
        }
        return redirect()->route('yonetim.portfolio')->with('success','Portfolio eklendi');
    }
    public function update($id)
    {
        $portfolio = Portfolio::find($id);
        return view('back.portfolio.update',compact('portfolio'));
    }
    public function updated($id)
    {
        $data = request()->only(['project_name','author','skill']);
        $portfolio = Portfolio::where('id',$id)->firstOrFail();
        $portfolio->update($data);
        if(request()->hasFile('image')){
            $this->validate(request(),[
                'image'=>'required|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
             $portfolioImage = request()->file('image');
            $portfolioImage = request()->image;
            $imageName = $portfolio->id. '.'. time() .'.'.$portfolioImage->extension();
            if($portfolioImage->isValid()){
                $portfolioImage->move('uploads/portfolio',$imageName);
              $portfolio->update(['project_name'=>request()->post('project_name'),'author'=>request()->post('author'),'skill'=>request()->post('skill'),'image'=>$imageName]);
            }
        }
        return redirect()->back()->with('success','Portfolio guncellendi');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('yonetim.portfolio')->with('success','Portfolio silindi');
    }
}
