<h1>{{ $category->name }}</h1>

<ul>
    @foreach ($category->threads as $thread)
        <li>{{ $thread->title }}</li>
    @endforeach
</ul>