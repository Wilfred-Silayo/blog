@extends('layouts.app')
@section('title',' | My Posts')
@section('content')
<!-- <div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
            @foreach($posts as $post)
               <div class="card-header  ">
                  <p>{{ $post->title}}</p>
                  <p> {{ $post->user->name }} </p>
               </div>
               <div class="card-body">
                   {{$post->body}}  
              <hr>
                    @endforeach
               </div>
             
          </div>
      </div>
   

      <div class="col-md-3">
          <div class="card">
            <div class="card-body">
            
               <a href="{{ url('createpost') }}" class="btn btn-sm btn-success ">create Post</a>
            </div>
          </div>
      </div>
   </div> 
</div>     -->
<div class="container">
   <div class="row justify-content-center">

      <div class="col-md-6">
      @foreach($posts as $post)
         <div class="card my-2">
            <div class="card-body my-3">
                  <p class=" ">{{ $post->title}}</p>
                  <p class=" ">{{ $post->user->name }} </p>
            
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
