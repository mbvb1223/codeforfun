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
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);

        $categories = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $categories;
    }

    public function getParents()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM categories WHERE parent_id IS NULL";
        $result = $conn->query($sql);

        $categories = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $categories;
    }

    public function getChildren()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM categories WHERE parent_id IS NOT NULL";
        $result = $conn->query($sql);

        $categories = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $categories;
    }

}

//$a = new Post();