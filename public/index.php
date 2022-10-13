<?php

use App\Hello\Hello;

require_once  "../vendor/autoload.php";

 
$phrase = new App\Hello();

$phrase-> talk();

var_dump($phrase);
