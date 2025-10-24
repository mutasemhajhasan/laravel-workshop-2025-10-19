@extends('template.app')
@section('section1')
<h2>Hello from post list</h2>
@foreach ($posts as $post)
<div class="card m-1">
     {{-- <img class="card-img-top" src="{{asset("storage/$post->image")}}" alt="Card image cap"> --}}
    <div class="card-body">
        <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
        <p class="card-text">{{$post->content}}</p>
        <small><i>{{$post->user->name}}</i></small>
    </div>
</div>
@endforeach
{{$posts->links('pagination::bootstrap-5')}}
@endsection
