<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index() 
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(25);
        
       // ray($posts);
        
       // $reversed = $posts->reverse();
       // ray($reversed);

        return view('posts.index', [
            'posts' => $posts,
        
            'length' => $posts->count()
        ]);
    }

    public function show(Post $post) 
    {
    
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $req) 
    {   
        //
        $this->validate($req, [
            'title' => 'required|max:20',
            'body' => 'required|max:60'
        ]);

        Post::create($req->only('title', 'body'));
    
        return redirect()
        ->route('posts.index')
        ->with('status', 'Your post was created.');
    }
}
