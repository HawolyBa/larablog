<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src={{$image}} alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>
      {{ $slot }}
      <p class="card-text">{{substr($body, 0, 120) . '...'}}</p>
      <a href="{{ route('post', $id) }}" class="btn btn-primary">Read more</a>
    </div>
  </div>
</div>