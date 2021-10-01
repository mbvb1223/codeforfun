<?php

$tittle = $content = $created_at = $category_id = $thumbnail = '';
if (!empty($_POST)) {
//    // var_dump($_POST); die();
//    if (isset($_POST['tittle'])) {
//        $tittle = $_POST['cuong'];
//    }
//    if (isset($_POST['content'])) {
//        $content = $_POST['content'];
//    }

    require_once('./models/post.php');
//    $sql = 'insert into posts(title, content,created_at,category_id,thumbnail) values ("' . $tittle . '", "' . $content . '","' . $created_at. '","' . $category_id . '","' . $thumbnail. '",)';

    $postModel = new Post();
    $postModel->create($_POST);

    header('Location: createController.php');
    die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<head>
    <title>Thêm/Sửa Bản Tin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Bản Tin</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="add.php">
                <div class="form-group">
                    <label for="name">tittle</label>
                    <input name="tittle" required="true" type="text" class="form-control" tittle="name"
                           value="<?= $tittle ?>">
                </div>
                <div class="form-group">
                    <label for="name">content</label>
                    <input name="content" required="true" type="text" class="form-control" tittle="name"
                           value="<?= $content ?>">
                </div>
                <div class="form-group">
                    <label for="name">created_at</label>
                    <input name="created_at" required="true" type="date" class="form-control" tittle="name"
                           value="<?= $created_at ?>">
                </div>
                <div class="form-group">
                    <label for="name">category_id</label>
                    <input name="category_id" required="true" type="text" class="form-control" tittle="name"
                           value="<?= $category_id ?>">
                </div>
                <div class="form-group">
                    <label for="name">thumbnail</label>
                    <input name="thumbnail" required="true" type="text" class="form-control" tittle="name"
                           value="<?= $thumbnail ?>">
                </div>
                <button class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>