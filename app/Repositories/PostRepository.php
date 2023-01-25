<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function getAll()
    {
        return $this->post->get();
    }

    public function save($data)
    {
        $post = new $this->post;

        $post->title = $data['title'];
        $post->deskripsi = $data['deskripsi'];

        $post->save();

        return $post->fresh();
    }
}
