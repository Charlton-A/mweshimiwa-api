<?php

$main=require('lib/base.php');

$main->config('config/config.ini');

$main->config('config/routes.ini');

$main->run();
?>
