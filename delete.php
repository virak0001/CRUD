<?php

use function PHPSTORM_META\elementType;

include 'connection.php';
    $id = $_GET['id'];
    $delete = mysqli_query($connection, "DELETE FROM student WHERE id = '$id'");
    if($delete == true) {
        header("Location:index.php");
    }else {
        echo "Cannot Delete";
    }
?>