<h1>Categories</h1>

<ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }} ({{ $category->threads->count() }} threads)</li>
    @endforeach
</ul>