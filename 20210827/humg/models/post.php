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
        $password = "a";
        $dbname = "humg";

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
        $password = "a";
        $dbname = "humg";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts;
    }
}

//$a = new Post();