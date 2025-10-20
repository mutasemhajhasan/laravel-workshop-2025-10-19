@extends('template.app')
@section('section1')
<h2>Hello from post list</h2>
@foreach ($posts as $post)
<div class="card m-1">
    <div class="card-body">
        <h4 class="card-title">{{$post->title}}</h4>
        <p class="card-text">{{$post->content}}</p>
    </div>
</div>
@endforeach
{{$posts->links('pagination::bootstrap-5')}}
@endsection
