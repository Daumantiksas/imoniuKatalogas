<?php

use MB\Task;
use MB\Database;

$connect = Database::connect();
$Imones = new Task($connect);



 require 'view/pages/table.view.php'; 
 
 ?>