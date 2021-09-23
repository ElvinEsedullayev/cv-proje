<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Skill;
class ProfileController extends Controller
{
    public function index()
    {
        $user = User::with('detail')->first();
        $education = Education::get();
        $portfolies = Portfolio::paginate(4);
        $skills = Skill::get();
        return view('back.profil',compact('user','education','portfolies','skills'));
    }
}
