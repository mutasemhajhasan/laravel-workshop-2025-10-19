@extends('template.app')

@section('section1')
    <div class="card m-1">
        {{-- <img class="card-img-top" src="{{asset("storage/$post->image")}}" alt="Card image cap"> --}}
        <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
            <p class="card-text">{{ $post->content }}</p>
        </div>
    </div>
    <h2>Comments</h2>
    @foreach ($post->comments as $comment)
        <div class="card m-3">
            {{-- <img class="card-img-top" src="{{asset("storage/$post->image")}}" alt="Card image cap"> --}}
            <div class="card-body">
                <p class="card-text"><b><u>{{ $comment->user->name }}</u></b></p>
                <p class="card-text">{{ $comment->content }}</p>
            </div>
        </div>
    @endforeach
    <div class="m-3">
        <div class="row">
            <div class="col-md-6">
                <form action="/comments" method="POST">
                    @csrf
                    <input class="form-control" type="text" name="content"><br>
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <input type="submit" class="btn btn-primary" value="send">
                </form>
            </div>
        </div>
    </div>
@endsection
