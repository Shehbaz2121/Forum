
@extends('layout.app')

@section('content')
   <h1>Posts</h1>

<ul>
    @foreach ($posts as $post)
      <li>{{ $post->body }}</li>
    @endforeach
</ul>
@endsection