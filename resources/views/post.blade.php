@extends('layouts.app')
@section('content')
  <div class="container">
    <h2 class="mb-3">{{$postdata->title}}</h2>
    <div class="d-flex justify-content-between mb-2">
      <div>
        <span class="metadata">Author: <a href="{{ route('author', $postdata->author) }}">{{$author}}</a></span><br/>
        <span class="metadata">Created at {{$postdata->created_at}}</span><br/>
      </div>
      <div>
        <h5 class="caps"><a href="{{ route('category', $postdata->category) }}"' class="badge badge-info">{{$postdata->category}}</a></h5>
      </div>
    </div>
    <img class="mb-3 post-image" src={{asset('storage/images/'.$postdata->image)}} alt="post image">
    <p>{{$postdata->body}}</p>
  </div>
@endsection