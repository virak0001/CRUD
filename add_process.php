<?php
    include 'connection.php';
    if(isset($_POST['create'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $insert = mysqli_query($connection, "INSERT INTO student(first_name, last_name, gender, email) VALUES('$fname', '$lname', '$gender', '$email')");
        if($insert == true) {
            header("Location:index.php");
        }else {
            echo "Cannot insert data";
        }
    }
?>