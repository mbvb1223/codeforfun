<?php
require_once('./models/post.php');
require_once('./models/category.php');

class IndexController
{
    public function index()
    {
        $posts = $this->getPosts();
        $parentCategories = $this->getParentCategories();
        $childCategories = $this->getChildCategories();
        $gioiThieu = $this->getPostsByCategoryId(1);
        $thongBao = $this->getPostsByCategoryId(6);
        $banTin = $this->getPostsByCategoryId(7);

        require "view.phtml";
    }

    public function getPosts()
    {
        $postModel = new Post();
        return $postModel->getAll();
    }

    public function getParentCategories()
    {
        $categoryModel = new Category();
        return $categoryModel->getParents();
    }

    public function getChildCategories()
    {
        $categoryModel = new Category();
        return $categoryModel->getChildren();
    }

    public function getPostsByCategoryId(int $id)
    {
        $postModel = new Post();
        return $postModel->getByCategoryId($id);
    }
}

$a = new IndexController();

$a->index();