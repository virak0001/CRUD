<?php
include 'header/header.php';
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM student WHERE id = '$id' ");
?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center h3">
                    Update
                </div>
                <?php foreach ($query as $result) { ?>
                    <form action="edit_process.php" method="POST">
                        <div class="card-body">
                                <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
                            <div class="form-group">
                                <label for="fname">First_name</label>
                                <input class="form-control" value="<?php echo $result['first_name']; ?>" type="text" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last_name</label>
                                <input class="form-control" value="<?php echo $result['last_name']; ?>" type="text" name="lname">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender">
                                    <?php if($result['gender'] == "male") { ?>
                                        <option value="male" selected >Male</option>
                                        <option value="female" >Female</option>
                                    <?php } else { ?>
                                        <option value="male" >Male</option>
                                        <option value="female" selected >Female</option>
                                    <?php } ?>
                                </select><br><br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" value="<?php echo $result['email']; ?>" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="edit" value="Save" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>