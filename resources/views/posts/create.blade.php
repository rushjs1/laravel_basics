@extends('layouts.app')
<link href="{{ asset('app.css') }}" rel="stylesheet">

@section('nav-name')
<h1 style="height: 60px">
    Create Post
</h1>
@endsection
@section('content')
<a href="/posts"> 
        <button class="back-btn">
         Back
        </button>
    </a>
<div class="create">
<h1 class="create-label">
    Create
</h1>

<form class="create-form" action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" id="" value="{{old('title')}}" placeholder="Title" class="title-input">
    @error('title')
   <div style="color:red;">
    {{$message}}
</div>
    @enderror

    <textarea name="body" id="body" class="body-textarea" placeholder="Post Body">
        {{old('body')}}
    </textarea>

    @error('body')
   <div style="color:red;">
    {{$message}}
</div>
    @enderror
    <button class="post-btn" type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="post-btn-svg"><path d="M13 5.41V17a1 1 0 0 1-2 0V5.41l-3.3 3.3a1 1 0 0 1-1.4-1.42l5-5a1 1 0 0 1 1.4 0l5 5a1 1 0 1 1-1.4 1.42L13 5.4zM3 17a1 1 0 0 1 2 0v3h14v-3a1 1 0 0 1 2 0v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3z"/></svg>
        &nbsp;
         POST 
        </button>
</form> 
</div>
@endsection