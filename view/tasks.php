<?php

$task = new Task();
$result =  $task->getTasks();


?>



<div class="container body-content">


    <br>
    <br>

    <table class="table table-bordered ">

        <tbody>
            <?php foreach ($result as $task) { ?>
                <tr>

                    <td>
                        <h4 class="card-title"><?php echo $task['title'] ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">Due date: <?php echo $task['due_date'] ?></h6>
                    </td>
                    <td>Edit Delete</td>
                    <?php if ($task['status'] == 'Backlog') { ?>
                        <td>
                            <div class="g-grid-cell" style="background-color: rgb(10, 210, 245) ;  ">
                                Backlog
                            </div>
                        </td> <?php }
                            if ($task['status'] == 'In progress') { ?> <td>
                            <div class="g-grid-cell" style="background-color: rgb(241, 196, 15)">
                                In Progress
                            </div>
                        </td> <?php }
                            if ($task['status'] == 'Done') { ?> <td>
                            <div class="g-grid-cell" style="background-color:rgb(61, 130, 222) ">
                                Done
                            </div>
                        </td> <?php } ?>
                </tr> <?php } ?> </tbody>
    </table>





</div>