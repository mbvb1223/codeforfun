<?php
require_once('../models/post.php');

class PostController
{
    public function edit()
    {
        $postId = $_GET['id'];

        $postModel = new Post();
        $post = $postModel->getById($postId);

//        echo "<pre>";
//        var_dump($post);
//        die();

        require "../views/post_edit.phtml";
    }

    public function index()
    {
        $postModel = new Post();
        $post = $postModel->getAll();

        require "../views/post_index.phtml";
    }
}

$a = new PostController();

$a->edit();