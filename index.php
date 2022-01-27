<?php
require 'vendor/autoload.php';
use MB\Request;
use MB\Router;

require Router::load('routes.php')->direct(Request::uri());



?>
