@extends('Template')

@section('content')

    <h1>Listado</h1>

    @foreach($posts as $post)
    <p>
        <strong>{{$post->id}}</strong>
        <a href="{{route('Post',$post->slug)}}">{{$post->title}}</a>

        <br>
        <samp>
            {{ $post->user->name}}
        </samp>
    </p>
    @endforeach
    {{$posts->links()}}
@endsection