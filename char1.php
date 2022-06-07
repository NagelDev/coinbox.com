<?php
   include 'connection.php';

            try {
                //code...
                // $sql = "SELECT * FROM raw_data ORDER BY date";
                $sql = "SELECT date_format(date, '%M'), sum(total_price) from raw_data GROUP BY date_format(date, '%M') ORDER BY 'sum(total_price)' DESC";
                $result = $pdo->query($sql);
                
                if($result->rowCount()>0){
                    while($row = $result->fetch()){
                        $dates[] = $row["date_format(date, '%M')"];
                        $totalPrice[] = $row["sum(total_price)"];
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