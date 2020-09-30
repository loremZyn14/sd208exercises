<?php
include('../inc/server.php');
include('../inc/header.php');
?>
<div class="container mt-5 pt-5 w-50">
    <form action="./index.php" method="post">
        <label for="headline">Create new Headline</label>
        <textarea class="form-control" name="headline" id="headline" cols="30" placeholder="Enter your headline here..."></textarea>
        <button class="btn btn-primary float-right mt-3" name="btn_headline">Change clickbait heading</button>
    </form>
    <div class="jumbotron bg-transparent mt-5 ">
        <h5>Original Headline</h5>
        <p><?php echo $originalHeadline ?? ''?></p>
        <h5>Honest Headline</h5>
        <p><?php echo $honestHeadline ?? []?></p>
    </div>
</div>
</body>

</html>