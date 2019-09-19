<?php
    include 'connection.php';
    if(isset($_POST['edit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        echo $fname;
        $update = mysqli_query($connection, "UPDATE student SET first_name = '$fname', last_name = '$lname', gender = '$gender', email = '$email' WHERE id = '$id' ");
        if($update == true) {
            header("Location:index.php");
        }else {
            echo "Cannot edit";
        }
    }
?>