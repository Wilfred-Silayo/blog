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

    public function profileSave(Request $request ) 
    {           
        $this->validate($request, [
            'description' => 'required',
            'image' => ['required','image']
         ]); 

        $user_id = auth()->user()->id;
        $description = $request->description;
        $path = public_path().'/uploads/images/';
        $file = $request->image;
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);

        //uploading details to the profile table
         $data= array('user_id'=>$user_id,'description'=>$description, 'profile_image'=>$filename);
         DB::table('profiles')->insert($data);
        return redirect()->route('profile', ['user' => $user_id]);
    }


    public function update(Request $request, $id){

        $employee = Employee::find($id);
   
        if($request->file != ''){        
             $path = public_path().'/uploads/images/';
   
             //code for remove old file
             if($employee->file != ''  && $employee->file != null){
                  $file_old = $path.$employee->file;
                  unlink($file_old);
             }
   
             //upload new file
             $file = $request->file;
             $filename = $file->getClientOriginalName();
             $file->move($path, $filename);
   
             //for update in table
             $employee->update(['file' => $filename]);
        }
   }

    public function profile( $user )
    {
        $profile=Profile::with('user')->where('user_id',$user)->get();
        $followers=Follower::with('profile')->where('following_id',$user)->count();
        $followings=Follower::withCount('profile')->where('follower_id',$user)->count();

        return view('profile', compact('profile') ,['followers'=>$followers, 'followings'=>$followings]);
        
    }

    public function profileEdit(){
       
        return view('editprofile');
    }
}
