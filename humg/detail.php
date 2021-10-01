
<?php
require_once('./models/post.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "baitap5";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// sql to delete a record
    $sql = "SELECT * FROM posts WHERE id=$id";
    $result = $conn->query($sql);

    $posts = $result->fetch_array(MYSQLI_ASSOC);

    //var_dump($posts);
    // die();
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

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
<form method="post" action="detail.php">
    <div class="form-group">
        <label for="name">tittle</label>
        <input name="tittle" required="true" type="text" class="form-control" tittle="name"
               value="<?php echo $posts['title'];?>">
    </div>
    <div class="form-group">
        <label for="name">content</label>
        <input name="content" required="true" type="text" class="form-control" tittle="name"
               value="<?php echo $posts['content'];?>">
    </div>
    <div class="form-group">
        <label for="name">created_at</label>
        <input name="created_at" required="true" type="date" class="form-control" tittle="name"
               value="<?php echo $posts['created_at'];?>">
    </div>
    <div class="form-group">
        <label for="name">category_id</label>
        <input name="category_id" required="true" type="text" class="form-control" tittle="name"
               value="<?php echo $posts['category_id'];?>">
    </div>
    <div class="form-group">
        <label for="name">thumbnail</label>
        <input name="thumbnail" required="true" type="text" class="form-control" tittle="name"
               value="  <img src="<?php echo $posts['thumbnail'];?>" >
    </div>
    <button class="btn btn-success">Lưu</button>
</form>
</body>

</html>