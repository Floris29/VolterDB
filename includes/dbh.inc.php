<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "jX4@w*yuMq@q]hU";
$dBname = "VolterDB";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn) {
    die("Connection field: " . mysqli_connect_error());
}