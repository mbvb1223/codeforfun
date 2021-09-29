<?php
require_once('./models/post.php');
class Create
{
    public function index()
    {
        $posts = $this->getPosts();
        require "create.php";
    }

    public function getPosts()
    {
        $postModel = new Post();
        return $postModel->getAll();
    }
}

$a = new Create();

$a->index();