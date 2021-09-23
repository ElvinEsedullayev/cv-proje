<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maraq;
use App\Models\Language;
use App\Models\User;
use App\Models\Social;
use App\Models\Skill;
class SkillController extends Controller
{
    public function index()
    {
        $interest = Maraq::all();
        $language = Language::all();
        $user = User::with('detail')->first();
        $socials = Social::all();
        $skills = Skill::all();
        return view('front.skill',compact('interest','language','user','socials','skills'));
    }
}
