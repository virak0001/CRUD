<?php
    include 'header/header.php';
    include 'connection.php';
    $query = mysqli_query($connection, "SELECT * FROM student");
    $id=1;
?>
<body>

    <div class="container mt-5">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php forEach($query as $result) { ?>
                <tr>
                    <td>  <?php echo $id; ?>  </td>
                    <td>  <?php echo $result['first_name']; ?>  </td>
                    <td>  <?php echo $result['last_name']; ?>  </td>
                    <td>  <?php echo $result['gender']; ?>  </td>
                    <td>  <?php echo $result['email']; ?>  </td>
                    <td> <i class="fas fa-pen"></i><a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure what to delete')">Delete</a> </td>
                </tr>
            <?php $id++; } ?>
        </table>
        <a href="add.php" class="btn btn-danger">Add New</a>
    </div>
</body>
</html>