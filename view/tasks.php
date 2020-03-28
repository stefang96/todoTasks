<?php

$task = new Task();
$result =  $task->getTasks();
$arrayB = array();
$arrayI = array();
$arrayD = array();

foreach ($result as $t) {
    if ($t['status'] == "Backlog") {
        array_push($arrayB, $t);
    }
    if ($t['status'] == "In progress") {
        array_push($arrayI, $t);
    }
    if ($t['status'] == "Done") {
        array_push($arrayD, $t);
    }
}



?>



<div class="container body-content">


    <br>
    <h1>ToDo Tasks</h1>
    <br>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="g-grid-cell" style="background-color: rgb(10, 210, 245) ">
                                Backlog
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayB as $b) : ?>
                        <tr>

                            <td>
                                <div class="card border-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header ">
                                        <h4> <?php echo $b['title']; ?> </h4>
                                    </div>
                                    <div class="card-body text">
                                        <h6 class="card-title">Description</h6>
                                        <p class="card-text"> <?php echo $b['description']; ?>.</p>

                                        <h6 class="card-title"> Due date: <?php echo $b['due_date']; ?></h6>
                                    </div>
                                    <div class="card-footer bg-transparent border-info">
                                        <a href="index.php?view=detail&id=<?= $b['id'] ?>"> <img style="width: 35px; height: 35px;  margin-left: 23%;  cursor: pointer" class="hoverNews" src="assets/img/details.jpg"></a>


                                        <a href="index.php?view=edit&id=<?= $b['id'] ?>"> <img style="width: 35px; height: 35px; margin-left: 5px; cursor: pointer" class="hoverNews" src="assets/img/edit2.png"></a>

                                        <a href="index.php?view=delete&id=<?= $b['id'] ?>"> <img style="width: 35px;height: 35px; margin-left: 5px; cursor: pointer" class="hoverNews" src="assets/img/delete.png"></a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="g-grid-cell" style="background-color: rgb(241, 196, 15)">
                                In Progress
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayI as $i) : ?>
                        <tr>

                            <td>
                                <div class="card border-warning  mb-3" style="max-width: 18rem;">
                                    <div class="card-header ">
                                        <h4> <?php echo $i['title']; ?> </h4>
                                    </div>
                                    <div class="card-body text">
                                        <h6 class="card-title">Description</h6>
                                        <p class="card-text"> <?php echo $i['description']; ?>.</p>

                                        <h6 class="card-title"> Due date: <?php echo $i['due_date']; ?></h6>
                                    </div>
                                    <div class="card-footer bg-transparent border-warning ">
                                        <a href="index.php?view=detail&id=<?= $i['id'] ?>"> <img style="width: 35px; height: 35px;  margin-left: 23%;  cursor: pointer" class="hoverNews" src="assets/img/details.jpg"></a>


                                        <a href="index.php?view=edit&id=<?= $i['id'] ?>"> <img style="width: 35px; height: 35px; margin-left: 5px; cursor: pointer" class="hoverNews" src="assets/img/edit2.png"></a>

                                        <a href="index.php?view=delete&id=<?= $i['id'] ?>"> <img style="width: 35px;height: 35px; margin-left: 5px; cursor: pointer" class="hoverNews" src="assets/img/delete.png"></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="g-grid-cell" style="background-color:#28a745 ">
                                Done
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($arrayD as $d) : ?>
                        <tr>

                            <td>
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header ">
                                        <h4> <?php echo $d['title']; ?> </h4>
                                    </div>
                                    <div class="card-body text">
                                        <h6 class="card-title">Description</h6>
                                        <p class="card-text"> <?php echo $d['description']; ?>.</p>

                                        <h6 class="card-title"> Due date: <?php echo $d['due_date']; ?></h6>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <a href="index.php?view=detail&id=<?= $d['id'] ?>"> <img style="width: 35px; height: 35px;  margin-left: 23%;  cursor: pointer" class="hoverNews" src="assets/img/details.jpg"></a>


                                        <a href="index.php?view=edit&id=<?= $d['id'] ?>"> <img style="width: 35px; height: 35px; margin-left: 5px; cursor: pointer" class="hoverNews" src="assets/img/edit2.png"></a>

                                        <a href="index.php?view=delete&id=<?= $d['id'] ?>"> <img style="width: 35px;height: 35px; margin-left: 5px; cursor: pointer" class="hoverNews" src="assets/img/delete.png"></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>





</div>