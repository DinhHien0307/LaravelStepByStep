@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

  <div class="blog-post">
          @foreach ($posts as $post)
            <h2 class="blog-post-title">
            <a href="posts/{{$post->id}}">
            {{$post->title}}</h2>
            </a>

            <p class="blog-post-meta">{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>
            {{$post->body}}

          @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

  </div><!-- /.blog-main -->
</div>
@endsection