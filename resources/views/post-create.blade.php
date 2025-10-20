@extends('template.app')
@section('section1')
<form method="POST" action="/posts">
    @csrf
    <input name="title" class="form-control" type="text"><br>
    <textarea class="form-control" name="content" id="content" cols="30" rows="4"></textarea>
    <br>
    <input class="btn btn-primary" type="submit" value="Send">
</form>

@endsection
