<?php


$task = new Task();
$result =  $task->getTask($_GET['id']);

//implement edit with database


?>

<div class="container body-content">
    <br>
    <br>
    <h1>Detail</h1>
    <hr><br>
    <form class="form-horizontal" id="createTask" action="index.php">

        <div class="alert alert-warning" role="alert" id="message_reg" hidden="true"></div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <textarea class="form-control" disabled rows="1" name="title" placeholder="Title"> <?php echo $result[0]['title'] ?> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Blocked</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" disabled name="chb" value="<?php echo $result[0]['blocked'] ?>" <?php if ($result[0]['blocked']) : echo "checked";
                                                                                                                                    endif; ?> id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Blocked
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Due date</label>
            <div class="col-10">
                <input class="form-control" type="date" name="date" disabled value="<?php echo $result[0]['due_date'] ?>" id="example-date-input">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Column</label>
            <div class="col-10">
                <select disabled id="selectList" name="selectList" class="browser-default custom-select custom-select-lg mb-3">
                    <option <?php if ($result[0]['status'] == "Backlog") : echo "selected";
                            endif; ?> value="Backlog">Backlog</option>
                    <option <?php if ($result[0]['status'] == "In progress") : echo "selected";
                            endif; ?> value="In Progress">In Progress</option>
                    <option <?php if ($result[0]['status'] == "Done") : echo "selected";
                            endif; ?> value="Done">Done</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" disabled rows="5">
            <?php echo $result[0]['description'] ?>
            </textarea>
        </div>


        <div class="form-group row">
            <div style="margin-left: 40%">
                <button type="submit" class="btn btn-info" style="width: 150px;">OK</button>
            </div>
        </div>
    </form>

</div>