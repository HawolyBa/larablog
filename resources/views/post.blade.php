@extends('layouts.app')
@section('content')
  <div class="container">
    <h2>{{$postdata->title}}</h2>
    <img src={{$postdata->image}} alt="post image">
    <p>{{$postdata->body}}</p>
  </div>
@endsection