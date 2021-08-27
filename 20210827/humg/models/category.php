<?php

class Category
{
    function __construct()
    {
    }

    public function getByCategoryId(int $id)
    {

    }

    public function getAll()
    {
        $servername = "localhost";
        $username = "root";
        $password = "a";
        $dbname = "humg";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);

        $categories = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $categories;
    }
}

//$a = new Post();