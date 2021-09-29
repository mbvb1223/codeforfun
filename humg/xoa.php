<?php
if (isset($_GET['id'])) {
    $id= $_GET['id'];
}
?>
<?php

    require_once('./models/post.php');
    $deletetModel = new Post();
    $deletetModel->delete($_delete);
    die();
?>
