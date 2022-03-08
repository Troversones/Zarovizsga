<?php

function dbkapcs()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nadoba";
global $con;
if(!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

die("Failed to connect!");

}
$con -> set_charset("utf8");
}
?>