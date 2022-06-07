<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "coin_box";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password,$db);
// // Check connection
// if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

$servername = "localhost";
$username = "root";
$password = "";
$db = "coin_box";
try {
   //code...
   $pdo = new PDO("mysql:host =$servername;dbname=$db",$username,$password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   //throw $th;
   die("ERROR: Could not connect." . $e->getMessage());
}


