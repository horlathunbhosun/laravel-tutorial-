@extends('layouts.app')


@section('content')
  <ul>
      @foreach($posts as $post)
          <img src="{{$post->path}}" height="100" alt="loading...">
          <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
          @endforeach
  </ul>




    @endsection

