<?php

class Post
{
    function __construct()
    {
    }

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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts;
    }

    public function create($data)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $title = $data['tittle'];
        $content = $data['content'];
        $created_at = $data['created_at'];
        $category_id = $data['category_id'];
        $thumbnail = $data['thumbnail'];
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
    public function delete()
    {
        $id= $_GET['id'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "DELETE FROM post WHERE id=$id";

        $conn->close();

        return $posts;
    }

}

//$a = new Post();