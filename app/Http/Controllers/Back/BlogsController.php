<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Validator;
class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('back.blogs.blog',compact('blogs'));
    }
    public function create()
    {
        return view('back.blogs.create');
    }
        public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'author'=>'required',
            'description'=>'required',
            'date'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
 
        $blog = new Blog;
        if($request->hasFile('image')){
            $validator = Validator::make($request->post(),[
                'image'=>'required|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $blogImage = $request->file('image');
            $blogImage = $request->image;
            $imageName = $blog->id. '.'. time() .'.'.$blogImage->extension();
            if($blogImage->isValid()){
                $blogImage->move('uploads/blogs',$imageName);
              $blog = Blog::updateOrCreate(['name'=>$request->post('name'),'author'=>$request->post('author'),'date'=>$request->post('date'),'description'=>$request->post('description'),'image'=>$imageName]);
            }
        }
        return redirect()->route('yonetim.blog')->with('success','Blog eklendi');
    }

    public function update($id)
    {
        $blog = Blog::find($id);
        return view('back.blogs.update',compact('blog'));
    }


        public function updated($id)
    {
        $data = request()->only(['name','author','date','description']);
        $blog = Blog::where('id',$id)->firstOrFail();
        $blog->update($data);
        if(request()->hasFile('image')){
            $this->validate(request(),[
                'image'=>'required|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
             $blogImage = request()->file('image');
            $blogImage = request()->image;
            $imageName = $blog->id. '.'. time() .'.'.$blogImage->extension();
            if($blogImage->isValid()){
                $blogImage->move('uploads/blogs',$imageName);
              $blog->update(['name'=>request()->post('name'),'author'=>request()->post('author'),'description'=>request()->post('description'),'date'=>request()->post('date'),'image'=>$imageName]);
            }
        }
        return redirect()->back()->with('success','Blog guncellendi');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('yonetim.blog')->with('success','Blog silindi');
    }
}
