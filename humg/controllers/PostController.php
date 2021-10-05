<?php
require_once('../models/Post.php');

class PostController
{
    public function create()
    {
        // show form create a new post
    }

    public function store()
    {
        // submit post data -> save into database
    }

    public function show()
    {
        $postId = $_GET['id'];

        $postModel = new Post();
        $post = $postModel->getById($postId);

//        echo "<pre>";
//        var_dump($post);
//        die();

        require "../views/post_edit.phtml";
    }

    public function update()
    {
        // update new data for existing post.
    }

    public function destroy()
    {
        // Delete a post by ID
    }

    public function index()
    {
        $postModel = new Post();
        $post = $postModel->getAll();

        require "../views/post_index.phtml";
    }

    public function call()
    {
        $method = $_GET['action'];

        $this->{$method};
    }
}

$a = new PostController();

$a->call();