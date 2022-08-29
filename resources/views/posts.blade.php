@extends('layouts.app')
@section('title',' | My Posts')
@section('content')

<div class="container">
   <div class="row justify-content-center">

      <div class="col-md-5">
      @foreach($posts as $post)
         <div class="card my-2">
            <div class="card-body my-3">
               <b>{{ $post->title}}</b>
               created by | <a style=" text-decoration:none; " href="{{ '/profile/'.$post->user_id }}">{{ $post->user->name }}</a> <br>
            
               {{$post->body}}  
               
            </div>
         </div>
       @endforeach
      </div>

   <div class="col-md-2">
         <div class="card my-2">
            <div class="card-head">

            </div>
            <div class="card-body">
            <a href="{{ url('createpost') }}" class="btn btn-sm btn-success ">create Post</a>
            </div>
         </div>
      </div>

</div>
 @endsection
