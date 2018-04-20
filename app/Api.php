<?php

include_once('Connection.php');

class Api {

  function cleanParameter($parameter){
    /**Cleans parameter passed on the Url
    Strips + if present,Convert to lowecase then title case
    Returns cleaned value in title case**/

    str_replace("+","",$parameter);
    $parameter=strtolower($parameter);
    $parameter=ucwords($parameter);
    return $parameter;
  }

  function getRepresentative($main){
    /**Fetchs the representative  of the constiuency passed in the url
    Queries the data.json file and
    Returns cleaned value in title case
    ***/
    

    $c_name=$main->PARAMS['name'];
    $c_name=self::cleanParameter($c_name);
    $main->table=new \DB\Jig\Mapper($main->jdb, 'data.json');
    $main->table->load(['@Constituency=?',$c_name]);

    if ($main->table->dry()){
      /**Checks if query result is empty,If Empty
      returns error
      **/
      $main->constituency=$c_name;
      $main->name='Not found';
      $main->status='Error';
      $main->message='Check name of Constituency or format of the name';
      echo \Template::instance()->render('representative.json','application/json');
    }
    else{
      /** Fetchs resprenstative from data.json for the queried
      constiuency and renders it to the json template
      **/
    $name=$main->table->Name;
    $main->constituency=$c_name;
    $main->name=$name;
    $main->status='Success';
    $main->message='Representative of the constituency found';
    echo \Template::instance()->render('representative.json','application/json');
  }
  $main->clear('table');
  }


  function getCounty($main){
    /** Fetchs the county name of the constiuency passed in the url
    Queries the data.json file and
    Returns cleaned value in title case**/
    $c_name=$main->PARAMS['name'];
    $c_name=self::cleanParameter($c_name);
    $main->table=new \DB\Jig\Mapper($main->jdb, 'data.json');
    $main->table->load(['@Constituency=?',$c_name]);

    if ($main->table->dry()){
      /**Checks if query result is empty,If Empty
      returns error
      **/
      $main->constituency=$c_name;
      $main->county='Not found';
      $main->status='Error';
      $main->message='Check name of Constituency or format of the name';
      echo \Template::instance()->render('county.json','application/json');
    }
    else{
      /** Fetchs resprenstative from data.json for the queried
      constiuency and renders it to the county.json template
      **/
    $county=$main->table->County;
    $main->set('constituency',$c_name);
    $main->set('county',$county);
    $main->set('status','Success');
    $main->set('message','County of the constituency found');
    echo \Template::instance()->render('county.json','application/json');
  }
  $main->clear('table');
  }

  function getParty($main){
    /** Fetchs the party of the representative  of the constiuency passed in the url
    Queries the data.json file and
    Returns cleaned value in title case**/
    $c_name=$main->PARAMS['name'];
    $c_name=self::cleanParameter($c_name);
    $main->table=new \DB\Jig\Mapper($main->jdb, 'data.json');
    $main->table->load(['@Constituency=?',$c_name]);

    if ($main->table->dry()){
      /**Checks if query result is empty,If Empty
      returns error
      **/
      $main->constituency=$c_name;
      $main->party='Not found';
      $main->status='Error';
      $main->message='Check name of Constituency or format of the name';
      echo \Template::instance()->render('party.json','application/json');
    }

    else {
      /** Fetchs rethe party of the representative  from data.json for the queried
      constiuency and renders it to party.json template
      **/
    $party=$main->table->Party;
    $main->constituency=$c_name;
    $main->party=$party;
    $main->status='Success';
    $main->message='Party of the represtative of constituency found';
    echo \Template::instance()->render('party.json','application/json');
  }
  	$main->clear('table');
  }

}
