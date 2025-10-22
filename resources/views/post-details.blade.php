@extends('template.app')

@section('section1')
<div class="card m-1">
     {{-- <img class="card-img-top" src="{{asset("storage/$post->image")}}" alt="Card image cap"> --}}
    <div class="card-body">
        <h4 class="card-title">{{$post->title}}</h4>
        <p class="card-text">{{$post->content}}</p>
    </div>
</div>
@endsection
