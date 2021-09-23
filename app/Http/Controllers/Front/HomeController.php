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
class HomeController extends Controller
{
    public function index()
    {
        $interest = Maraq::all();
        $language = Language::all();
        $user = User::with('detail')->first();
        $socials = Social::all();
        $education = Education::all();
        $experience = Experience::all();
        return view('front.home',compact('interest','language','user','socials','education','experience'));
    }
}
