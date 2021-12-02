<?php

$tittle = $content = $created_at = $category_id = $thumbnail = '';
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
        <div class="panel-body">
            <form method="post" action="http://localhost/codeNew/humg/controllers/PostController.php?action=store">
                <div class="form-group">
                    <label for="name">tittle</label>
                    <input name="tittle"  type="text" class="form-control"
                           value="<?php echo $tittle;?>">

                </div>
                <div class="form-group">
                    <label for="name">content</label>
                    <input name="content"  type="text" class="form-control"
                           value="<?php echo $content;?>">

                </div>
                <div class="form-group">
                    <label for="name">created_at</label>
                    <input name="created_at"  type="date" class="form-control"
                           value="<?php echo $created_at;?>">

                </div>
                <div class="form-group">
                    <label for="name">category_id</label>
                    <input name="category_id"  type="text" class="form-control"
                           value="<?php echo $category_id;?>">

                </div>
                <div class="form-group">
                    <label for="name">thumbnail</label>
                    <input name="thumbnail"  type="text" class="form-control"
                           value="<?php echo $thumbnail;?>">

                </div>
                <button type="submit" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
