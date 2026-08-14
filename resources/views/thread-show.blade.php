<h1>{{ $thread->title }}</h1>

<ul>
    @foreach ($thread->posts as $post)
        <li>{{ $post->body }}</li>
    @endforeach
</ul>