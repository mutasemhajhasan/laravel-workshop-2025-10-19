<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::with('user')->orderBy('id', 'DESC')->paginate(5);
        return view('post-list', ['posts' => $posts]);
    }

    function create()
    {
        return view('post-create');
    }

    function store()
    {
        $title = request('title');
        $content = request('content');
        request()->validate([
            'title' => 'required|min:5',
        ]);
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->user_id = Auth::user()->id;
        // $file=request()->file('file');
        //  $path=$file->store('assets/images','public');
        //  $post->image=$path;
        $post->save();
        return redirect('/posts');
    }

    function show()
    {
        $id = request('id');
        $post = Post::findOrFail($id);
        return view('post-details', ['post' => $post]);
    }

    public function comments()
    {
        //validation
        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = Auth::user()->id;
        $comment->post_id = request('post_id');
        $comment->save();
        return redirect('posts/' . request('post_id'));
    }
}
