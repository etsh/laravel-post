@extends('html')

@section('content')
<h4>Create a New Post</h4>
<form method="POST" action="{{ route('post.store') }}">
    @include('Post::form')

    <div class="input-group-button">
        <input type="submit" class="button" value="Create Post">
    </div>
</form>
@endsection