<?php

$tittle = $content = $created_at  = $hoptac_id = $image=$cuong ='';
if (!empty($_POST)) {
    if (isset($_POST['tittle'])) {
        $tittle = $_POST['tittle'];
    }
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
    }
    if (isset($_POST['created_at'])) {
        $created_at = $_POST['created_at'];
    }
    if (isset($_POST['image'])) {
        $image = $_POST['image'];
    }
    if (isset($_POST['cuong'])) {
        $cuong = $_POST['cuong'];
    }

    if (!empty($name)) {
        //Luu vao database

        $sql = 'insert into hoptac(title, content , created_at,image,cuong,) values ("'.$tittle.'", "'. $content.'", "'. $created_at.'", "'.$image.'", "'.$cuong.'",)';
            execute($sql);
        require_once('./db.php');
        header('Location: indexController.php');
        die();
    }
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
            <form method="post">
                <div class="form-group">
                    <label for="name">tittle</label>
                    <input type="text" name="tittle" value="<?=$tittle?>" hidden="true">
                    <input required="true" type="text" class="form-control" tittle="name" tittle="name" value="<?=$tittle?>">
                </div>
                <div class="form-group">
                    <label for="name">content</label>
                    <input type="text" name="content" value="<?=$content?>" hidden="true">
                    <input required="true" type="text" class="form-control" content="name" content="name" value="<?=$content?>">
                </div>
                <div class="form-group">
                    <label for="name">created_at</label>
                    <input type="text" name="created_at" value="<?=$created_at?>" hidden="true">
                    <input required="true" type="date" class="form-control" created_at="name" created_at="name" value="<?=$created_at?>">
                </div>
                <div class="form-group">
                        <label for="name">hoptac_id</label>
                        <input type="text" name="hoptac_id" value="<?=$hoptac_id?>" hidden="true">
                        <input required="true" type="number" class="form-control" hoptac_id="name" hoptac_id="name" value="<?=$hoptac_id?>">
                </div>
                <div class="form-group">
                        <label for="name">image </label>
                        <input type="text" name="image " value="<?=$image ?>" hidden="true">
                        <input required="true" type="text" class="form-control" image ="name" image ="name" value="<?=$image ?>">
                </div>
                <div class="form-group">
                    <label for="name">cuong</label>
                    <input type="text" name="cuon " value="<?=$cuong ?>" hidden="true">
                    <input required="true" type="text" class="form-control" cuong="name" cuong ="name" value="<?=$cuong ?>">
                </div>
                <button class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>