<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;
use App\Models\Follower;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'profile_picture'=>[],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function update(array $data)
    {
        return User::update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function profile( $user )
    {
        $profile=Profile::with('user')->where('user_id',$user)->get();
        $followers=Follower::with('profile')->where('following_id',$user)->count();
        $followings=Follower::withCount('profile')->where('follower_id',$user)->count();

        return view('profile', compact('profile') ,['followers'=>$followers, 'followings'=>$followings]);
        
    }
}
