<?php
include('./../../inc/server.php');
include('./../../inc/header.php');
?>
<div class="d-flex align-items-center" style="height: 100vh;
 background-image: url('./../../inc/assets/img/bg-img.jpg');
 background-repeat: no-repeat;background-size:cover">



    <div class="card mx-auto " style="min-width: 800px;">
        
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
            <h3 class="text-muted ">Users</h3>
            <a href="./../" class="btn btn-primary">Add User <i class="fa fa-plus"></i></a>
            </div>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'registration');
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr >
                                <td class="p-3"> <?php echo $row['firstname']; ?> </td>
                                <td class="p-3"> <?php echo $row['lastname']; ?> </td>
                                <td class="p-3"> <?php echo $row['email']; ?> </td>
                                <td>
                                    <form action="./index.php" method="GET">
                                        <input type="hidden" name="user_id" value="<?php echo $row['id'];?>">
                                        <button type="submit" name="delete" class="btn btn-danger mt-0 "><i class="fa fa-trash"></i></button>
                                        <button type="submit" name="edit" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                    </form>
                                </td>

                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>