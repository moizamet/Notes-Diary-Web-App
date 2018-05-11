<?php

define ('HOST','localhost');
$dbuser="root";
$dbpass="winserver";
$dbname="vit";

$connect=mysqli_connect(HOST,$dbuser,$dbpass,$dbname) or die("Cannot Connect To Remote Database");	
session_start();
?>