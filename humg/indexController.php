<?php
require_once('./models/post.php');
require_once('./models/category.php');
require_once('./models/hoptac.php');
class IndexController
{
    public function index()
    {
        $posts = $this->getPosts();
        $delete = $this->delete();
        $parentCategories = $this->getParentCategories();
        $childCategories = $this->getChildCategories();
        $gioiThieu = $this->getPostsByCategoryId(1);
        $thongBao = $this->getPostsByCategoryId(2);
        $banTin = $this->getPostsByCategoryId(3);
        $daoTao = $this->getPostsByCategoryId(4);
        require "view.phtml";
    }

    public function getPosts()
    {
        $postModel = new Post();
        return $postModel->getAll();
    }
    public function delete()
    {
        $deleteModel = new Post();
        return $deleteModel->delete();
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
    public function getAll()
    {
        $categoryModel = new Category();
        return $categoryModel->getChildren();
    }
}

$a = new IndexController();

$a->index();