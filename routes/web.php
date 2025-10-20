<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',function(){
    $posts=Post::orderBy('id','DESC')
    ->paginate(5);
return view('post-list',['posts'=>$posts]);
});

Route::get('/posts/create',function(){
return view('post-create');
});

Route::post('/posts',function(){
$title=request('title');
$content=request('content');
$post=new Post();
$post->title=$title;
$post->content=$content;
$post->user_id=1;
$post->save();
return redirect('/posts');
});


Route::get('/posts/{id}',function(){
$id=request('id');
return $id;
});

