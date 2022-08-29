<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
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
    public function posts($id)
    {   
        $posts=Post::with('user')->where('user_id',$id)->get();
        return view('posts',compact('posts'));
    }

    public function createposts()
    { 
        return view('createpost');
    }

    public function savepost(Request $request)
    {   $id = $request->input('id');
        $title = $request->input('posttitle');
        $body = $request->input('message');
        $data= array('user_id'=>$id,'title'=>$title, 'body'=>$body);
        DB::table('posts')->insert($data);
        return view('createpost');
    }
   

   
}

