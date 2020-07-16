<?php // login.php
ob_start(); //Turns on output buffering
session_start();

$timezone =date_default_timezone_set("Europe/Madrid");
$conn=mysqli_connect("localhost:8000", "lauralospitao", "normajeane010626", "bobisland");

if(mysqli_connect_errno())
{
    echo "Failed to connect:" . mysqli_connect_errno();
}

