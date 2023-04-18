<?php

//Conexão com banco de dados mysql

$host = 'db';
$user = 'root';
$password = 'root';
$dbname = 'db_test';

$conn = mysqli_connect($host, $user, $password, $dbname);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
