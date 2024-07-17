<?php
include "variable.php";

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "korzinka";
$dbport = 3456;

$mysqli = @new mysqli(
  $servername, // "127.0.0.1"
  $username, // "root"
  $password, // "root"
  $dbname, // "korzinka"
  $dbport // 3456
);

//$mysqli = @new mysqli("127.0.0.1", "root", "root", "korzinka", 3456);

if ($mysqli->connect_errno) {
  throw new Exception($mysqli->connect_error);
}

