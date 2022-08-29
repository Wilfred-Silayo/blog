@extends('layouts.app')
@section('content')
<div class="container-fluid border">
        <div class="text-center">
            <h1 style="color:rgb(122, 103, 15);">Welcome To Wblog</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                A very warm welcome to you! It is lovely to have you among us!
                It is an honor to have such a hardworking fellow like you to join us! Welcome!
                You are a wonderful person with a wonderful view of life. 
                Your companionship is always an opportunity to learn. A warm welcome to you to join us.
            </div>
            <div class="col-md-8 my-2">
                <img class="img" src="{{ url('img/home.jpg')}}" style="width:100%;" >

            </div>
            <div class=" justify-content-center mt-5 col-md-8">
            © 2022 | Wblog
            </div>
        </div>
       
</div>     
 @endsection
