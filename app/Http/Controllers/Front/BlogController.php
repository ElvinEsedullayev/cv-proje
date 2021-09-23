<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maraq;
use App\Models\Language;
use App\Models\User;
use App\Models\Social;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Blog;
class BlogController extends Controller
{
        public function index()
    {
        $interest = Maraq::all();
        $language = Language::all();
        $user = User::with('detail')->first();
        $socials = Social::all();
        //$education = Education::all();
        //$experience = Experience::all();
        $blogs = Blog::orderByDesc('id')->paginate(6);
        return view('front.blog',compact('interest','language','user','socials','blogs'));
    }
    public function detay($id)
    {
        $interest = Maraq::all();
        $language = Language::all();
        $user = User::with('detail')->first();
        $socials = Social::all();
        $blog = Blog::find($id);
        return view('front.blogdetay',compact('interest','language','user','socials','blog'));
    }
}
