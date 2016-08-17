<?php
$main=Base::instance();
/**Loads folder db  and initializes it as
the database with the json files as tables**/
$main->set('jdb',new DB\Jig($main->get('mydb'),DB\Jig::FORMAT_JSON));
