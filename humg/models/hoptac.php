<?php

class hoptac
{
    function __construct()
    {
    }

    public function gethoptac(int $id)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM hoptac";
        $result = $conn->query($sql);

        $hoptac= $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $hoptac;
    }

    public function getAll()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM hoptac";
        $result = $conn->query($sql);

        $hoptacs = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $hoptacs;
    }

}

//$a = new Post();