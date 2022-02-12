<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'information_schema';

$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);
  
if ($mysqli->connect_error) {
  echo 'Errno: '.$mysqli->connect_errno;
  echo '<br>';
  echo 'Error: '.$mysqli->connect_error;
  exit();
}

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: '.$mysqli->host_info;
echo '<br>';
echo 'Protocol version: '.$mysqli->protocol_version;
echo '<br>';

$mysqli->close();

$vnome=$_GET["fname"];
$vemail=$_GET["femail"];
$vtext=$_GET["textarea"];
$vdate=$_GET["date"];
$vdate2=$_GET["date2"];
$vcheck=$_GET["check"];

echo "Nome: $vnome <br> Email: $vemail <br> Comentario: $vtext <br> Data1: $vdate <br>
Data2: $vdate2 <br> Hamilton: $vcheck <br>";