<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "";

$connect = new mysqli($host, $username, $password, $database);
if ($connect) {
    echo "undefined connection";
} else {
    echo "database connected";
}
?>