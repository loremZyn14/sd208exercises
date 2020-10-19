<?php
include('../inc/server.php');
include('../inc/header.php');
?>
<div class="container mt-5 w-50 ">
    <div class="card">
        <div class="card-header text-center">
            PHP Registration Form
        </div>
        <div class="card-body">
            <form action="./index.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" required>
                    <small class="text-danger"><?php echo $errFname; ?></small>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="fname" required>
                    <small class="text-danger"><?php echo $errLname; ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                    <small class="text-danger"><?php echo $errEmail; ?></small>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit Info">
                </div>
            </form>
        </div>
        <?php if ($errFname === "" and $errLname === "" and $errEmail === "" and isset($_POST['submit'])) { ?>
            <div class="card-footer">
                <p>Your first name is <?php echo $_POST['fname'] ?? ''; ?></p>
                <p>Your last name is <?php echo $_POST['lname'] ?? ''; ?></p>
                <p>Your email is <?php echo $_POST['email'] ?? ''; ?></p>
                <p>Your address name is <?php echo $_POST['address'] ?? ''; ?></p>
            </div>
        <?php } ?>
    </div>
</div>