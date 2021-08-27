<?php
require_once('./models/post.php');
require_once('./models/category.php');

class IndexController
{
    public function index()
    {
        $posts = $this->getPosts();
        $categories = $this->getCategories();

        require "view.phtml";
    }

    public function getPosts()
    {
        $postModel = new Post();
        return $postModel->getAll();
    }

    public function getCategories()
    {
        $categoryModel = new Category();
        return $categoryModel->getAll();
    }
}

$a = new IndexController();

$a->index();