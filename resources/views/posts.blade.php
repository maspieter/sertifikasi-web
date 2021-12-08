@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if($posts->count())
<div class="card mb-3">
  <img src="img/coding.jpg" class="card-img-top" alt="">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[0]->title }}</h3>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
    <a href="/posts/{{ $posts[0]->id }}" class="text-decoration-none btn btn-danger">Baca Lebih Lanjut</a>
  </div>
</div>
@else
<p class="text-center fs-3">404 Eror Not Found.</p>
@endif

@if($posts->count())
<div class="card mb-3">
  <img src="img/jak.jpeg" class="card-img-top" alt="">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[1]->title }}</h3>
    <p class="card-text">{{ $posts[1]->excerpt }}</p>
    <p class="card-text"><small class="text-muted">{{ $posts[1]->created_at->diffForHumans() }}</small></p>
    <a href="/posts/{{ $posts[1]->id }}" class="text-decoration-none btn btn-danger">Baca Lebih Lanjut</a>
  </div>
</div>
@else
<p class="text-center fs-3">404 Eror Not Found.</p>
@endif

@if($posts->count())
<div class="card mb-3">
  <img src="img/kampus.jpg" class="card-img-top" alt="">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[2]->title }}</h3>
    <p class="card-text">{{ $posts[2]->excerpt }}</p>
    <p class="card-text"><small class="text-muted">{{ $posts[2]->created_at->diffForHumans() }}</small></p>
    <a href="/posts/{{ $posts[2]->id }}" class="text-decoration-none btn btn-danger">Baca Lebih Lanjut</a>
  </div>
</div>
@else
<p class="text-center fs-3">404 Eror Not Found.</p>
@endif
@endsection


