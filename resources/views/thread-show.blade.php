<h1>{{ $thread->title }}</h1>
<a href="/threads" style="display:block; margin-bottom: 10px;">← Back to Threads</a>
<a href="/threads/{{ $thread->id }}/posts/create">Reply</a>

<ul>
    @foreach ($thread->posts as $post)
        <li>{{ $post->body }}</li>
    @endforeach
</ul>