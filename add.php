<?php
     include 'header/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center h3">
                    Add New
                </div>
                    <form action="add_process.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="fname">First_name</label>
                                <input class="form-control" type="text" name="fname" required>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last_name</label>
                                <input class="form-control" type="text" name="lname" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" >
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select><br><br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group">
                                    <input type="submit" name="create" value="Create" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>