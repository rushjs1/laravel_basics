@extends('layouts.app')
    @section('nav-name')
    <h1>
    Posts
    </h1>
    @endsection
    @section('content')
    <div class="posts-parent">
    @if(count($posts))
    <br>
   

    <h2 class="post-status">
    {{Session::get('status')}}
    </h2>

    <hr>

        <div class="posts-title">
        <strong>
       All Posts
        </strong>
      
        </div>
        <hr>
        <br/>
     <div class="post-section-head">
   <!--   Post# Title   -->
   <a href="/posts/create" class="create-anc"> 
        <button class="create-post-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="create-btn-svg"><path d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-5 4h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2v-2a1 1 0 0 1 2 0v2z"/></svg> 
        Create Post 
        </button>
         </a>
     </div> 
    <div class="posts-loop">
        <div class="post-loop-cont">
        <div class="post-loop-header">
          <div class="icon-file">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: #6e96bd;"><path d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
          </div> 
          <div>
         Title
          </div> 
        </div>
       @foreach($posts as $post)
       <div class="post-loop-child">
       <div>
       {{$length--}})&nbsp;&nbsp;&nbsp;
       </div>
       <div>
       <a href="{{route('posts.show', $post)}}" class="posts-index-title">{{$post->title}}</a>
       </div>
       <br>
       </div>
    @endforeach
    </div>
    </div>

    
    @else
    There are no posts


    @endif
    </div>
    @endsection