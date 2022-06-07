<?php
   include 'connection.php';

            try {
                //code...
                $sql = "SELECT date_format(date, '%Y'), SUM(total_price) FROM raw_data GROUP BY date_format(date, '%Y')";
                
                $result = $pdo->query($sql);
                
                if($result->rowCount()>0){
                    while($row = $result->fetch()){
                        $year[] = $row["date_format(date, '%Y')"];
                        $totalPrice2[] = $row["SUM(total_price)"];
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