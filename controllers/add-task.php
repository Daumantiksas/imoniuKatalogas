<?php
use MB\Database;
use MB\Task;

var_dump($_POST);

    if(isset($_POST['save'])){
        $connection = Database::connect();  //connect to db
        $task = new Task($connection);      //create task object
        $task->createTask($_POST);          //pass form data to Task objext

    }





require 'view/pages/add-task.view.php';
