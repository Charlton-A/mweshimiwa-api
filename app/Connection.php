<?php
$main=Base::instance();
/**Loads folder db  and initializes it as
the database with the json files as tables**/
$main->jdb=new DB\Jig($main->mydb,DB\Jig::FORMAT_JSON);
