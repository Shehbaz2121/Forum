<h1>Create a Thread</h1>

<form action="/threads" method="POST">
    @csrf

    <label>Title:</label>
    <input type="text" name="title">

    <label>Category:</label>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Create Thread</button>
</form>