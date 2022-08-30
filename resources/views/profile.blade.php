@extends('layouts.app')
@section('title',' | Profile')
@section('content')

<div class="container">
   <div class="row justify-content-center">

    <div class="col-md-5">
      @foreach($profile as $profile)
         <div class="card my-2">
            <div class="card-header ">
            <b>{{ $profile->user->name}} </b>
            
            </div>
            <div class="card-body my-3">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="/uploads/images/{{ $profile->profile_image }}" class="img " alt="Profile Picture"  style="border-radius:50% ;" width="100" height="100">
                    </div>
                    <div class="col-sm-9">
                    
                    <div class="card-title d-flex">
                        <span>@</span>{{ $profile->user->username}}
                        <div class="ms-4">Followers <b>{{$followers}}</b></div>
                        <div class="ms-4">Following <b>{{$followings}}</b></div>
                    </div>
                    <div class="card-text">{{ $profile->title }} </div>
                    <div class="card-text">{{ $profile->description }} </div>
                    </div>
                </div>
                   
            </div>
         </div>
         @endforeach
    </div>
      
   <div class="col-md-2">
    @if(Auth::user())
        @if($profile)
        <div class="card my-2">
            <div class="card-body">
            <a href="/p/edit" class="btn btn-sm btn-success ">Create Profile</a>
            </div>
        </div>
        @endif

        @if(!$profile)
        <div class="card my-2">
            <div class="card-body">
            <a href="/p/update" class="btn btn-sm btn-success ">Edit Profile</a>
            </div>
        </div>
        @endif
    @endif
    </div>
  </div>
</div>
@endsection