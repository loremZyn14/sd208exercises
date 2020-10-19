<?php
require('./../../inc/server.php');
include('./../../inc/header.php');
?>
<div class="d-flex align-items-center" style="height: 100vh;
 background-image: url('./../../inc/assets/img/bg-img.jpg');
 background-repeat: no-repeat;background-size:cover">

    <?php  
    $conn = mysqli_connect('localhost', 'root', '', 'registration');
    $query = "SELECT * FROM users WHERE id =" . $_GET['id'];
    $result = mysqli_query($conn, $query);
    ?>

    <div class="card mx-auto " style="min-width: 400px;">
        <div class="card-header bg-transparent text-center p-3">
            <h3 class="text-muted">Update  </h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <?php foreach ($errors as $error) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $error ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }  ?>
            </div>
            <?php  
            
            if (mysqli_num_rows($result) > 0) {
               $user =  mysqli_fetch_assoc($result) ?>
            <form action="./index.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $user['id']?>">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control " id="firstname" name="firstname" value="<?php echo $user['firstname'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname'] ?? '' ?>">
                </div>

                <div class="form-group">
                    <label for="eamil">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-block py-2 " name="update" value="Update">
                </div>
            </form>
            <?php }?>
        </div>
    </div>

</div>