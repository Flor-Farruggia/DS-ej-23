<?php

require_once 'models/person.php';
require_once 'models/nation.php';

$n = new Nation ();
$n->id = 01;
$n->description = 'This is a low description of this nation';

$p = new Person ();
$p->name = 'Jhon Doe';
$p->address = 'P.Sherman 42 Wallaby street';
$p->dni = 11222333;
$p->age = 33 ;
$p->nationality = $n;

$p->showData();