@extends('layouts.app')
@section('content')
  <h2 class="mb-5">All Posts</h2>
  <div class="row">
    @foreach ($posts as $post)
        @component('components.card')
          @slot('title')
              {{$post->title}}
          @endslot
          @slot('image')
              {{asset('storage/images/'.$post->image)}}
          @endslot
          @slot('body')
              {{$post->body}}
          @endslot
          @slot('id')
              {{$post->id}}
          @endslot
        @endcomponent
    @endforeach
  </div>
@endsection