<?php
//Load the framework base class
$main=require('lib/base.php');

//Load data from config i.e varaibe names
// and paths and debug configuration
$main->config('config/config.ini');

//Load routing table
$main->config('config/routes.ini');

//Run the app with the loaded setup
$main->run();
?>
