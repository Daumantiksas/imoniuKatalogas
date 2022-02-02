<?php

use MB\Task;
use MB\Database;

$connect = Database::connect();
$Imones = new Task($connect);
if(isset($_POST['search']) && !empty($_POST['input_search'])){
    $fields = [];
    $fields = $Imones->findTask($_POST['input_search']);
}
require 'view/pages/home.view.php';
?>