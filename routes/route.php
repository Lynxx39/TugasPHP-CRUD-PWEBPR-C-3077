<?php 

$routes = [];


$routes['GET']['/e-sewa'] = 'EsewaController@index';
$routes['GET']['/e-sewacreate'] = 'EsewaController@formcreate';
$routes['GET']['/e-sewaupdate/{id}'] = 'EsewaController@formupdate';
$routes['POST']['/createe-sewa'] = 'EsewaController@create';
$routes['POST']['/updatee-sewa/{id}'] = 'EsewaController@update';
$routes['GET']['/deletee-sewa/{id}'] = 'EsewaController@delete';
?>