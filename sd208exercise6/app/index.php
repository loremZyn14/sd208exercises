<?php
include('../inc/server.php');
include('../inc/header.php');
?>
<div class="container mt-5 pt-5 d-flex flex-column w-50">
    <div class="jumbotron text-center ">
        <h3>Bookmark List</h3>
    </div><br>
    <div class="card border-0">
        <div class="card-header bg-transparent">

            <form action="./index.php" method="post">

                <div class="form-group">
                    <label for="bookmarkName">Bookmark Name :</label>
                    <input type="text" class="form-control" name="bookmarkName" id="bookmarkName" placeholder="Type your bookmark name.." required autofocus>
                </div>
                <div class="form-group">
                    <label for="bookmarkURL">Bookmark URL :</label>
                    <input type="text" class="form-control" name="bookmarkURL" id="bookmarkURL" placeholder="Type your bookmark url.." required autofocus>
                </div>

                <button class="btn btn-primary mt-2 px-5 float-right" name="addBookmark">Add <i class="fa fa-plus"></i></button>
            </form>
        </div>
        <div class="card-body px-0">
            <ul class="list-group ">
                <?php if (isset($_SESSION['bookmarks'])) {
                    $number = 1;
                    foreach ($_SESSION['bookmarks'] as $bookmarkName => $bookmarkURL) { ?>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="bookmarkName" value="<?php echo $bookmarkName ?>">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                
                                <a target="_blank" href="<?php echo $bookmarkURL ?>"><?php echo $number++ . ".  ". $bookmarkName  ?></a>
                                <span><button class="btn btn-danger" name="deleteBookmark"><i class="fa fa-trash"></i></button> </span>
                            </li>
                        </form>
                <?php }
                } ?>
            </ul>
            <?php if (isset($_SESSION['bookmarks']) and count($_SESSION['bookmarks']) > 0 )  { ?>
                <form action="./index.php" method="post">
                    <button class="btn btn-danger btn-block mt-3" name="deleteAll">Empty Bookmarks</button>
                </form>
            <?php } ?>
        </div>
    </div>
</div>

<?php include('../inc/footer.php') ?>