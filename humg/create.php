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

    <title>Thêm/Sửa Bản Tin</title>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Bản Tin</h2>
        </div>
        <div class="panel-body">
            <a href="add.php">
                <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Bản Tin</button>
            </a>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="50px">id</th>
<!--                    <th>thumbnail</th>-->
                    <th>title</th>
<!--                    <th>content</th>-->
                    <th>created_at</th>
                    <th>caterogy_id</th>
                    <th width="50px">Sua</th>
                    <th width="50px">xoa</th>
                </tr>
                </thead>
                <?php foreach ($posts as $post)  { ?>
                <tr>
                    <td><?php echo $post['id'] ?></td>
                    <td><?php echo $post['title'] ?></td>
<!--                    <td>   --><?php //foreach ($posts as $post) ?>
<!--                        --><?php //echo $post['thumbnail'] ?>
<!--                    </td>-->
<!--                    <td>   --><?php //foreach ($posts as $post) ?>
<!--                        --><?php //echo $post['content'] ?>
<!--                    </td>-->
                    <td><?php echo $post['created_at'] ?></td>
                    <td><?php echo $post['category_id'] ?></td>
                    <td><a href="sua.php?id=<?php echo $post['id'] ?>">
                            <button class="btn btn-success" style="margin-bottom: 15px;">SỬA</button>
                        </a></td>
                    <td><a href="xoa.php?id=<?php echo $post['id'] ?>">
                            <button class="btn btn-success" style="margin-bottom: 15px;">XOÁ</button>
                        </a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
