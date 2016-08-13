<?php

include_once('Connection.php');

class Api {

  function get_member($main){
    $c_name=$main->get('PARAMS.name');
    str_replace("+","",c_name);
    $c_name=strtolower($c_name);
    $c_name=ucwords($c_name);
    $main->set('table',new \DB\Jig\Mapper($main->get('jdb'), 'data.json'));
    $main->get('table')->load(['@Constituency=?',$c_name]);

    if ($main->get('table')->dry()){
      $main->set('constituency',$c_name);
      $main->set('name','Not found');
      $main->set('status','Error');
      $main->set('message','Check name of Constituency or format of the name');
      echo \Template::instance()->render('constituency.json','application/json');
    }
    else{
    $name=$main->get('table')->Name;
    $main->set('constituency',$c_name);
    $main->set('name',$name);
    $main->set('status','Success');
    $main->set('message','Representative of the constituency found');
    echo \Template::instance()->render('constituency.json','application/json');
  }
  }


  function get_county($main){
    $c_name=$main->get('PARAMS.name');
    str_replace("+","",c_name);
    $c_name=strtolower($c_name);
    $c_name=ucwords($c_name);
    $main->set('table',new \DB\Jig\Mapper($main->get('jdb'), 'data.json'));
    $main->get('table')->load(['@Constituency=?',$c_name]);

    if ($main->get('table')->dry()){
      $main->set('constituency',$c_name);
      $main->set('county','Not found');
      $main->set('status','Error');
      $main->set('message','Check name of Constituency or format of the name');
      echo \Template::instance()->render('county.json','application/json');
    }
    else{
    $county=$main->get('table')->County;
    $main->set('constituency',$c_name);
    $main->set('county',$county);
    $main->set('status','Success');
    $main->set('message','County of the constituency found');
    echo \Template::instance()->render('county.json','application/json');
  }
  }

  function get_party($main){
    $c_name=$main->get('PARAMS.name');
    str_replace("+","",c_name);
    $c_name=strtolower($c_name);
    $c_name=ucwords($c_name);
    $main->set('table',new \DB\Jig\Mapper($main->get('jdb'), 'data.json'));
    $main->get('table')->load(['@Constituency=?',$c_name]);

    if ($main->get('table')->dry()){
      $main->set('constituency',$c_name);
      $main->set('party','Not found');
      $main->set('status','Error');
      $main->set('message','Check name of Constituency or format of the name');
      echo \Template::instance()->render('party.json','application/json');
    }

    else {
    $party=$main->get('table')->Party;
    $main->set('constituency',$c_name);
    $main->set('party',$party);
    $main->set('status','Success');
    $main->set('message','Party of the represtative of constituency found');
    echo \Template::instance()->render('party.json','application/json');
  }
  }

  function get_count_county($main){

    
  }





}
