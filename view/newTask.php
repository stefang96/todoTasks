<?php

if (isset($_POST['title']) && isset($_POST['date']) && isset($_POST['description'])) {



    $task = new Task();
    $result =  $task->create($_POST);


    if ($result) {
        header('Location: index.php');
    }
}

?>
<div class="container body-content">
    <br>
    <br>
    <h1>Create new task</h1>
    <hr><br>
    <form class="form-horizontal" id="createTask" action="" method="post">

        <div class="alert alert-warning" role="alert" id="message_reg" hidden="true"></div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="1" name="title" placeholder="Title"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Blocked</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="chb" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Blocked
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Due date</label>
            <div class="col-10">
                <input class="form-control" type="date" name="date" id="example-date-input">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Column</label>
            <div class="col-10">
                <select id="selectList" name="selectList" class="browser-default custom-select custom-select-lg mb-3">
                    <option value="Backlog">Backlog</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Done">Done</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" rows="5"></textarea>
        </div>


        <div class="form-group row">
            <div style="margin-left: 35%">
                <button type="button" class="btn btn-info" id="addTask" name="add" style="width: 150px;">Create</button>
            </div>
        </div>
    </form>

</div>