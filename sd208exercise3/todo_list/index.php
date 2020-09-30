<?php
include('../inc/server.php');
include('../inc/header.php');
?>
<div class="container mt-5 pt-5 d-flex flex-column w-50">
    <div class="jumbotron text-center ">
        <h3>Simple Todo List</h3>
    </div><br>
    <div class="card border-0">
        <div class="card-header bg-transparent">

            <form action="./index.php" method="post">
                <label for="task">Todo</label>
                <input type="text" class="form-control" name="task" id="task" placeholder="Type your todo for today..." required autofocus>
                <button class="btn btn-primary mt-2 px-5 float-right" name="addTodo">Add <i class="fa fa-plus"></i></button>
            </form>
        </div>
        <div class="card-body px-0">
            <ul class="list-group ">
                <?php foreach ($_SESSION['todos'] as $key => $todo) { ?>
                    <form action="./index.php" method="post">
                        <input type="hidden" name="taskKey" value="<?php echo $key ?>">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $key + 1 .". " . $todo ?> 
                            <span><button class="btn btn-danger" name="deleteTodo" ><i class="fa fa-trash"></i></button> </span>
                        </li>
                    </form>
                <?php } ?>
            </ul>
            <form action="./index.php" method="post">
                <button class="btn btn-danger btn-block mt-3" name="deleteAll">Empty task list</button>
            </form>
        </div>
    </div>
</div>

<?php include('../inc/footer.php') ?>