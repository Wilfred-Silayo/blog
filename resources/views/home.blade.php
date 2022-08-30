@extends('layouts.app')
@section('title',' | Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @foreach($posts as $post)
                <div class="card my-2">
                    <div class="card-body my-3">
                      <div class="row">
                        <div class="col-sm-3">
                            <img src="/uploads/images/{{  $post->user->profile->profile_image }}" class="img " alt="Profile Picture"  style="border-radius:50% ;" width="100" height="100">
                        </div>
                        <div class="col-sm-9">
                            <b>{{ $post->title}}</b>
                            created by | <a style=" text-decoration:none; " href="{{ '/profile/'.$post->user_id }}">
                            {{ $post->user->name }}</a>  at <small>{{$post->posted_at}}</small><br>
                        
                            {{$post->body}}  
                        </div>
                     </div>
                    </div>
                </div>
             @endforeach
        
        </div>
    </div>
</div>
@endsection
