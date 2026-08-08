<h1>Threads</h1>

<ul>
    @foreach ($threads as $thread)
        <li>{{ $thread->title }}</li>
    @endforeach
</ul>