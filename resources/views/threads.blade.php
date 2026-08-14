<h1>Threads</h1>
<a href="/threads/create">Create Thread</a>
<ul>
    @foreach ($threads as $thread)
        <li><a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a></li>
    @endforeach
</ul>