<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Validator;
use Illuminate\Support\Facades\Hash;//kod ucun yazilir
class UserController extends Controller
{
    public function index()
    {
        $users = User::with('detail')->orderByDesc('created_at')->get();
        return view('back.user.user',compact('users'));
    }
    public function create()
    {
        return view('back.user.create');
    }
    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:5',
            'email'=>'required|email|unique:users',
        ]);
        if($validator->fails()){
            return redirect()->route('user.create')->withErrors($validator)->withInput();
        }
        $data = $request->only(['name','email','about','phone','adres','specialty']);
        if($request->filled('password')){
            $data['password']=Hash::make($request->post('password'));
        }
        $user = User::create($data);
        if($request->hasFile('image')){
            Validator::make($request->post(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = $request->file('image');
            $userimage = $request->image;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                       UserDetail::updateOrCreate(
                             ['user_id'=>$user->id],
                            ['adress'=>$request->post('adres'),'phone'=>$request->post('phone'),'about'=>$request->post('about'),'birthday'=>$request->post('birthday'),'specialty'=>$request->post('specialty'),'image'=>$dosyadi]
                        );
            }
        }
        return redirect()->route('yonetim.user')->with('success','User eklendi');
    }

    public function update($id)
    {
        $user = User::with('detail')->find($id);
        return view('back.user.update',compact('user'));
    }
    public function updated($id)
    {
        $validator = $this->validate(request(),[
            'name'=>'required|min:5',
            'email'=>'required',
        ]);
      
        $data = request()->only(['name','email']);
        $data_detay =request()->only(['about','adress','phone','birthday','specialty']);
        if(request()->filled('password')){//eger sifre dolu ise
            $data['password']=Hash::make(request('password'));
        }
        $user = User::where('id',$id)->firstOrFail();
        $user->update($data);
        $user->detail->update($data_detay);
                if(request()->hasFile('image')){
            $validator= $this->validate(request(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = request()->file('image');
            $userimage = request()->image;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                       UserDetail::updateOrCreate(
                             ['user_id'=>$user->id],
                            ['image'=>$dosyadi]
                        );
            }
        }
        return redirect()->back()->with('success','User guncellendi');
    }
    public function delete($id)
    {
        $user= User::find($id);
        $user->detail()->delete();
        $user->delete();
        return redirect()->route('yonetim.user')->with('success','User silindi'); 
    }
}
