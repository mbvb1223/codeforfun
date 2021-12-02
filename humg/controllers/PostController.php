<?php
require_once('../models/Post.php');

class PostController
{
    public function create()
    {

        require "../views/post_add.phtml.php";
        // show form create a new post
    }

    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $created_at = $_POST['created_at'];
        $category_id = $_POST['category_id'];
        $thumbnail = $_POST['thumbnail'];
        $postModel = new Post();
        $postModel->save($title,$content,$created_at,$category_id,$thumbnail);
        header('Location:http://localhost/codeNew/humg/controllers/PostController.php?action=index');

        // submit post data -> save into database
    }

    public function show()
    {
        $postId = $_GET['id'];

        $postModel = new Post();

        $post = $postModel->getById($postId);

        require "../views/post_detail.phtml.php";
    }
    public function showFormEdit()
    {
        $postId = $_GET['id'];

        $postModel = new Post();
        $post = $postModel->getById($postId);
//        echo "<pre>";
//        print_r($post); die();
        require "../views/post_edit.phtml";
    }

    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $created_at = $_POST['created_at'];
        $category_id = $_POST['category_id'];
        $thumbnail = $_POST['thumbnail'];
        $postModel = new Post();
        $postModel->update($id, $title,$content,$created_at,$category_id,$thumbnail);
        header('Location:http://localhost/codeNew/humg/controllers/PostController.php?action=index');
        // update new data for existing post.
        //die('asdf');
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $title = $_GET['title'];
        $content = $_GET['content'];
        $created_at = $_GET['created_at'];
        $category_id = $_GET['category_id'];
        $thumbnail = $_GET['thumbnail'];
        $postModel = new Post();
        $postModel->delete($id,$title,$content,$created_at,$category_id,$thumbnail);
        header('Location:http://localhost/codeNew/humg/controllers/PostController.php?action=index');
        // Delete a post by ID
    }

    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->getAll();

        require "../views/post_index.phtml";
    }

    public function call()
    {
        $method = $_GET['action'];

        switch ($method) {
            case "index":
                $this->index();
                break;
            case "add":
                $this->create();
                break;
            case "store":
                $this->store();
                break;
            case "edit":
                $this->update();
                break;
            case "delete":
                $this->destroy();
                break;
            case "xem":
                $this->show();
                break;
            case "showEdit":
               $this->showFormEdit();
               break;
       }
    }
}

$a = new PostController();

$a->call();