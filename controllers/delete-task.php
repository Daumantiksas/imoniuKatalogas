<?php
use MB\Request;
use MB\Database;
use MB\Task;

$id = intval(basename(Request::uri()));
$connection = Database::connect();
$task = new Task($connection);
$task->deleteTask($id);

?>