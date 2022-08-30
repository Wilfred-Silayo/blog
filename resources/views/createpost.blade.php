@extends('layouts.app')
@section('title',' | Create Post')
@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Create Post
                </div>

                <div class="card-body">
                    <div class="form ">
                     <form method="POST" action="{{ route('savepost') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="posttitle">Post Title</label>

                            <div class="col">
                                <input type="text" class="form-control" id="posttitle" name="posttitle" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="message">Post Content</label>

                            <div class="col">
                                <textarea name="message" id="message" cols="10" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-primary">
                                  Post
                                </button>
                                <button type="submit" class="mx-4 btn btn-sm btn-secondary">
                                    <a href="{{ url('posts').'/'. Auth::user()->id }}" style="text-decoration:none; color:white;">Cancel<a>
                                </button>
                            </div>
                        </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection