@extends('layouts.app')
<link href="{{ asset('app.css') }}" rel="stylesheet">
@section('nav-name')
<h1>
    Posts
</h1>
@endsection
@section('content')
<a href="/posts"> 
        <button class="back-btn">
            Back
        </button>
    </a>
<div class="show-post">
<h1>
    Title: 
{{$post->title}}
</h1>
<h3>
  Body:  {{$post->body}}
</h3>
</div>

@endsection