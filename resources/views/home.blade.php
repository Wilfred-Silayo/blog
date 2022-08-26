@extends('layouts.app')
@section('title',' | Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
    </div>
</div>
@endsection
