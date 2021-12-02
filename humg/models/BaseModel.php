<?php

class BaseModel
{
    public function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baitap5";

        // Create connection
        return new mysqli($servername, $username, $password, $dbname);
    }
}