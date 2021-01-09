@extends('layouts.app')
@section('content')
  <h2>Add a new post</h2>
  <hr/>
  <form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <div class="col-lg-10 col-md-8 col-sm-6">
        <label for="title">Title</label>
        <input name='title' type="text" class="form-control" id="title" placeholder="Enter a title" required>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <label for="title">Choose a category</label>
        <select name="category" id="category" class="form-control">
          <option value="tech">Tech</option>
          <option value="fashion">Fashion</option>
          <option value="history">History</option>
          <option value="entertainment">Entertainment</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="body">Start writing your article</label>
      <textarea required name="body" class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Add an image</label>
      <input name="image" type="file" class="form-control-file" id="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection