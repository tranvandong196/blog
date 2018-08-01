@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
        {{$post->body}}

        <hr/>

        <ul class="list-group">
            <div class="comments">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}: &nbsp
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </div>
        </ul>
    </div>
@endsection