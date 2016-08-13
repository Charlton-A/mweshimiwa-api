<?php
$main=Base::instance();

$main->set('jdb',new DB\Jig($main->get('mydb'),DB\Jig::FORMAT_JSON));
