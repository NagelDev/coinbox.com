<?php

//    include 'char1.php';
//    include 'chart2.php';

function getNumberOfSales(){
    include 'connection.php';
    $sql = "SELECT sum(quantity) FROM `raw_data`";
    $result = $pdo->query($sql);
 
     while($row = $result->fetch()){
     $numberOfSales = $row["sum(quantity)"];
     return  $numberOfSales;
 }
}

function getRevenue(){
    include 'connection.php';
    $sql = "SELECT sum(total_price) FROM `raw_data`";
    $result = $pdo->query($sql);
 
     while($row = $result->fetch()){
     $numberOfSales = $row["sum(total_price)"];
     return  $numberOfSales;
 }
}

   ?> 