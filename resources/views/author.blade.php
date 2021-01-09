@extends('layouts.app')
@section('content')
  <h2>Author - {{$author}}</h2>
  @foreach ($posts as $post)
      <h3>{{$post->title}}</h3>
  @endforeach
@endsection