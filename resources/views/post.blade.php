@extends('layouts.app')
@section('content')
  <div class="container">
    <h2 class="mb-3">{{$postdata->title}}</h2>
    <span class="metadata">Author: <a href={{'/author/' .$postdata->author}}>{{$author}}</a></span><br/>
    <span class="metadata">Created at {{$postdata->created_at}}</span><br/>
    <img class="mb-3 post-image" src={{asset('storage/images/'.$postdata->image)}} alt="post image">
    <p>{{$postdata->body}}</p>
  </div>
@endsection