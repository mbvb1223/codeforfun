<?php

class Post extends BaseModel
{
    public function getByCategoryId(int $id)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM posts WHERE category_id = $id";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts;
    }

    public function getAll()
    {
        $conn = $this->getConnection();

        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts;
    }

    public function create()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $title = $_POST['tittle'];
        $content = $_POST['content'];
        $created_at = $_POST['created_at'];
        $category_id = $_POST['category_id'];
        $thumbnail = $_POST['thumbnail'];
        $sql = "insert into posts(title, content, created_at, category_id, thumbnail) values ('$title', '$content', '$created_at', '$category_id', '$thumbnail')";
//        $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        return true;
    }

    public function update($array)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $id = $array['id'];
        $title = $array['tittle'];
        $content = $array['content'];
        $createad_at = $array['created_at'];
        $category_id = $array['category_id'];
        $thumbnail = $array['thumbnail'];
        $sql = "UPDATE posts SET title='$title',content='$content',created_at='$createad_at',category_id='$category_id',thumbnail='$thumbnail' WHERE id=$id";//        $conn->query($sql);
//        $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        return true;
    }

    public function updateid()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $id = $_POST['id'];
        $title = $_POST['tittle'];
        $content = $_POST['content'];
        $createad_at = $_POST['created_at'];
        $category_id = $_POST['category_id'];
        $thumbnail = $_POST['thumbnail'];
        $sql = "SELECT * FROM posts WHERE id=$id";
//        $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        return true;
    }

    public function getById($id)
    {
        $conn = $this->getConnection();

        $sql = "SELECT * FROM posts where id = $id";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts[0];
    }
}

//$a = new Post();