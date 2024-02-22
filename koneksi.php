<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "sppraniukk";

$koneksi = new mysqli
("$server", "$username", "$password", "$db");

if(!$koneksi){
    die(mysqli_error ($koneksi));
}

?>