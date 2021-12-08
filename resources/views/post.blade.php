@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="mb-5">{{ $post->title }}</h1>


            {!! $post->body !!}
        </div>
        <a href="/blog" class="btn btn-warning">Back to Post</a>
    </div>
</div>
@endsection

