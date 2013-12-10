<?php

$Route = new Route($_SERVER['QUERY_STRING']);

$id = $_GET['id'];

// GET

$Route->get("", "ContactController@index");

$Route->get("section=create", "ContactController@create");

$Route->get("section=show&id={$id}", "ContactController@show");

$Route->get("section=edit&id={$id}", "ContactController@edit");


// POST

$Route->get("section=create&query=store", "ContactController@store");

$Route->get("section=edit&id={$id}&query=update", "ContactController@update");

$Route->get("section=edit&id={$id}&query=destroy", "ContactController@destroy");