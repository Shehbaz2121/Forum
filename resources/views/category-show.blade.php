<h1>{{ $category->name }}</h1>
<a href="/categories">← Back to Categories</a>
<a href="/threads/create?category_id={{ $category->id }}">Create Thread</a>
<ul>
    @foreach ($category->threads as $thread)
        <li><a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a></li>
    @endforeach
</ul>