<?php
// DB/server info !!! LOCAL connectie !!!
$servername = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "greenwear";

$sqliconn = new mysqli($servername, $DBusername, $DBpassword, $DBname);

if ($sqliconn->connect_error) {
    die("Connection failed: " . $sqliconn->connect_error);
}
