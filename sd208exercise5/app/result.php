<?php
include('../inc/server.php');
include('../inc/header.php');
?>

<div class="container w-50 mt-5 pt-5 text-center">
    <h1 class="text-muted mb-5">Result</h1>
    <h4>You are  <?php echo $_SESSION['result'];?> </h4>
    <a href="./index.php" class="btn btn-primary mt-5"> Back to Calculator</a>
</div>