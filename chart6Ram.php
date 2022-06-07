<?php
   include 'connection.php';

            try {
                //code...
                // $sql = "SELECT * FROM raw_data ORDER BY date";
                $sql = "SELECT ram, SUM(quantity) FROM `raw_data` GROUP BY ram ORDER BY SUM(quantity) DESC";
                $result = $pdo->query($sql);
                
                if($result->rowCount()>0){
                    while($row = $result->fetch()){
                        // $dates[] = $row["date_format(date, '%M')"];
                        // $totalPrice[] = $row["sum(total_price)"];
                        $ram[] = $row["ram"];
                        $quantityRam[] =  $row["SUM(quantity)"];
                    }
                    unset($result);
                }else{
                    echo "No result";
                }
            } catch (PDOException $e) {
                //throw $th;
                die("Eror");
            }
            unset($pdo);
            // print_r($dates);
   ?> 