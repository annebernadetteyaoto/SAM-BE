<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "corememories";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("Failed to Connect!");
}
?>