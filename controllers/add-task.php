<?php
use ToDo\Database;
use ToDo\Task;
use ToDo\Validation;

 $errors = [];

if(isset($_POST['save'])){
    $errors = Validation::validator($_POST);

    if(empty($errors)){
        $connection = Database::connect(); // prisijungimas prie db
        $task = new Task($connection);    // sukuria task objekta
        $task->createTask($_POST);         //
    }
//    else {
//        var_dump($errors);
//    }

}

require 'view/pages/add-task.view.php';
