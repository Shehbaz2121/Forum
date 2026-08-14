<h1>Reply to Thread</h1>

<form action="/threads/{{ $threadId }}/posts" method="POST">
    @csrf
    <textarea name="body"></textarea>
    <button type="submit">Post Reply</button>
</form>