<?php

namespace Etsh\Post\Repositories;

use Etsh\Post\Models\Post;
use Etsh\Post\Repositories\PostRepositoryInterface;

class EloquentPostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::findOrFail($id);
    }

    public function store(array $input)
    {
        $post = new Post;

        $post->title = $input['title'];
        $post->body = $input['body'];

        return $post->save();
    }

    public function update(array $input)
    {
        $post = $this->find($input['id']);

        $post->title = $input['title'];
        $post->body = $input['body'];

        return $post->save();
    }

    public function delete($id)
    {
        $post = $this->find($id);

        return $post->delete();
    }
}