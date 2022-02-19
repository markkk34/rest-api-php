<?php
ini_set( 'html_errors' , 0 );

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../vendor/autoload.php';

$controller = new Controller();
