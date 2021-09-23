<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Language;
class AnasayfaController extends Controller
{
    public function index()
    {
       $blog = Blog::get();
       $portfolio = Portfolio::get();
       $skill = Skill::get();
       $language = Language::get();
        return view('back.home',compact('blog','portfolio','skill','language'));
    }
}
