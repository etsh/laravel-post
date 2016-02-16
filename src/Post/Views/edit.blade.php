@extends('html')

@section('content')
<h4>Edit an Existing Post</h4>

<form method="POST" action="{{ route('post.update', $id) }}">
    <input type="hidden" name="_method" value="PATCH">

    @include('Post::form')

    <div class="input-group-button">
        <input type="submit" class="button" value="Update Post">
    </div>
</form>
@endsection