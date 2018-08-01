<div class="blog-post">
    <a href="/posts/{{$post->id}}">
        <h2 class="blog-post-title">{{$post->title}}</h2>
    </a>
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by &nbsp<a href="#">{{auth()->user()->name}}</a></p>

    {{$post->body}}
</div>