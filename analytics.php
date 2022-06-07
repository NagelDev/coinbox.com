<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics</title>
    <!-- <link rel="stylesheet" href="./analytics.css"> -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Aladin&family=Grandstander:wght@500&family=Inder&family=Indie+Flower&family=Righteous&family=Roboto:wght@400;700&display=swap');
        *{
    padding:0;
    margin: 0;
    box-sizing: border-box;
    }
    .navigation{
        width: 100%;
        height: 10vh;
        background-color: #04046c;
        }
        
    .upper_section{
        width:100%;
        height: 30vh;
        margin-top: 20px;
        /* background-color:blue; */
        display:flex;
        justify-content:space-around;
        align-items:center;
    }
    .upper_section .card{
        /* background-color:white; */
        display:flex;
        flex-direction: column;
        justify-content:center;
        align-items:center;
        padding:40px 50px;
        border-radius:10px;
        box-shadow: 0px 2px 5px rgba(0,0,0,.2)
    }
    .upper_section .card h1{
        font-family: 'Roboto', sans-serif;
        font-size:30px;
    }
    .upper_section .card h3{
        font-family: 'Roboto', sans-serif;
        color:#0000FE;
        font-size:25px;
        font-weight: lighter;
        
    }
    
    .container{
        width: 100%;
        height: 100%;
        padding:0px 10px;
        display:flex;
        
        flex-wrap:wrap;
        justify-content:space-around;
        /* background-color:blue; */
    }
    .container .chart_container {
        /* margin-top:20px; */
        width: 45%;
        height: 300px;
        background-color: white;
        /* border: lightblue 2px solid; */
        border-radius: 10px;
        display:flex;
        padding:10px;
        box-shadow: 0px 2px 5px rgba(0,0,0,.2)
    }
    .container .chart_container canvas{
        /* background-color: lightblue; */
        border-radius: 10px;
    }
    .container .chart_container:nth-child(3),
    .container .chart_container:nth-child(4){
        margin-top:20px;
    }
    .container .chart_container:nth-child(5),
    .container .chart_container:nth-child(6){
        margin-top:20px;
    }

    @media screen and (max-width: 800px) {
    .container{
        height: 100%;
        display:flex;
        flex-wrap:nowrap;
        justify-content:space-around;
        flex-direction:column;
        /* padding:0px 0px; */
        /* background-color:blue; */
    }
    .container .chart_container{
        width:100%;
        
    }
    .container .chart_container:nth-child(1),
    .container .chart_container:nth-child(2),
    .container .chart_container:nth-child(3),
    .container .chart_container:nth-child(4),
    .container .chart_container:nth-child(5){
        margin-top:20px;
    }
    }
    @media screen and (max-width: 700px) {
    .upper_section{
        flex-direction:column;
        height: 50vh;
    }
    .container{
        padding:0px 0px;
        /* background-color:blue; */
    }
    }
</style>
</head>
<body>
    
   <?php
   include 'getnumbers.php';
   include 'char1.php';
   include 'chart2.php';
   include 'chart3Pie.php';
   include 'chart4Processor.php';
   include 'chart5Monitor.php';
   include 'chart6Ram.php';
   ?> 
<!-- Char 2 php -->
<div class="navigation">
    
</div>

<div class="upper_section">
    <div class="card">
        <h1>NUMBER OF SALES</h1>
        <h3> <?php echo getNumberOfSales();?></h3>
    </div>
    <div class="card">
        <h1>REVENUE</h1>
        <h3>P <?php echo getRevenue();?></h3>
    </div>
</div>
    

    <div class="container">
        <div class="chart_container">
        <canvas id="myChart"></canvas>
        </div>

        <div class="chart_container">
        <canvas id="myChart2"></canvas>
        </div>

        <div class="chart_container">
        <canvas id="myChartProcessor"></canvas>
        </div>

        <div class="chart_container">
        <canvas id="myChart3pie"></canvas>
        </div>

        <div class="chart_container">
        <canvas id="myChart5Monitor"></canvas>
        </div>

        <div class="chart_container">
        <canvas id="myChart6Ram"></canvas>
        </div>
        
    </div>

   

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
<script>
    let myChart = document.getElementById('myChart').getContext('2d')

    let dateArray = <?php echo json_encode($dates);?>
    // console.log(dateArray)

    // let dateChartJS = dateArray.map((day, index) => {
    //     let dayjs = new Date(day);
    //     // console.log(dayjs)
    //     return dayjs.setHours(0,0,0,0)
    // })

    let price = <?php echo json_encode($totalPrice);?>

    //console.log(dateChartJS)
    
    let massPopChart = new Chart(myChart,{
        type: 'line',// bar, horizontalBar, pie, Line, dougnut, radar, polarArea
        data:{
            labels: dateArray,
            datasets:[{
                label:'Monthly Sales',
                data:<?php echo json_encode($totalPrice);?>,
                backgroundColor: "rgb(19, 181, 234)"
            }]
        },
        options:{
            maintainAspectRatio: false,
            plugins: {
                title: {
                    display: true,
                    text: 'Sales Per Month'
                }
            },
            // scales:{
            //     x:{
            //         type: 'time',
            //         time:{
            //             unit: 'year'
            //         }
            //     }
            // }
        }
    });


    // chart 2******************************************************************

    
</script>
<!-- ******************************************************************chart2 yealy-->
<script>
    let myChart2 = document.getElementById('myChart2').getContext('2d')

    let year = <?php echo json_encode($year);?>
    // console.log(dateArray)

    let dateChartJS2 = year.map((day, index) => {
    let dayjs = new Date(day);
    // console.log(dayjs)
    return dayjs.setHours(0,0,0,0)
    })

    // let price = <?php echo json_encode($totalPrice2);?>

    //console.log(dateChartJS)
    // ['Boston','Worcester','Springfield','Lowell','Camridge', 'New Bedford'],
    // /617594,181045,153060,106519,105162,95072
    let massPopChart2 = new Chart(myChart2,{
        type: 'line',// bar, horizontalBar, pie, Line, dougnut, radar, polarArea
        data:{
            labels: dateChartJS2,
            datasets:[{
                label:'Yearly Sales',
                data:<?php echo json_encode($totalPrice2);?>,
                backgroundColor: "rgb(19, 181, 234)"
            }]
        },
        options:{
            maintainAspectRatio: false,
            plugins: {
                title: {
                    display: true,
                    text: 'Sales Per Year'
                }
            },
            scales:{
                x:{
                    type: 'time',
                    time:{
                        unit: 'year'
                    }
                }
            }
        }
    });
</script>
<!-- ******************************************************************chart2 -->


<!-- ******************************************************************chart3 pie storage -->
<script>
    let myChart3pie = document.getElementById('myChart3pie').getContext('2d')

    let storage = <?php echo json_encode($storage);?>

    let massPopChart3 = new Chart(myChart3pie,{
        type: 'pie',// bar, horizontalBar, pie, Line, dougnut, radar, polarArea
        data:{
            labels: storage,
            datasets:[{
                label:'Sales Per Year',
                data:<?php echo json_encode($quantity);?>,
                backgroundColor:["rgb(255, 26, 104)",
                "rgb(54, 162, 234)",
                "red",
                "rgb(75, 192, 192)"]
               
            }]
        },
        options:{
            maintainAspectRatio: false,
            plugins: {
                title: {
                    display: true,
                    text: 'Storage'
                }
            },
            
        }
    });
</script>
<!-- ******************************************************************chart3 pie -->


<!-- ******************************************************************chart4 bar processor -->
<script>
    let myChartProcessor = document.getElementById('myChartProcessor').getContext('2d')

    let processor = <?php echo json_encode($processor);?>

    let massPopChart4 = new Chart(myChartProcessor,{
        type: 'bar',// bar, horizontalBar, pie, Line, dougnut, radar, polarArea
        data:{
            labels: processor,
            datasets:[{
                label:'Processor',
                data:<?php echo json_encode($quantityprocessor);?>,
                backgroundColor:["rgb(255, 26, 104)",
                "rgb(220, 48, 174)",
                "rgb(48, 148, 220)",
                "rgb(49, 170, 194)",
                "rgb(41, 204, 155)",
                "rgb(210, 196, 48)"
            ]
            
            }]
        },
        options:{
            maintainAspectRatio: false,
            // plugins: {
            //     title: {
            //         display: true,
            //         text: 'Processor'
            //     }
            // },
            
        }
    });
</script>
<!-- ******************************************************************chart4 bar processor -->

<!-- ******************************************************************chart5 bar Monitor -->
<script>
    let myChart5Monitor = document.getElementById('myChart5Monitor').getContext('2d')

    let monitor = <?php echo json_encode($monitor);?>

    let massPopChart5 = new Chart(myChart5Monitor,{
        type: 'bar',// bar, horizontalBar, pie, Line, dougnut, radar, polarArea
        data:{
            labels: monitor,
            datasets:[{
                label:'Monitor',
                data:<?php echo json_encode($quantityMonitor);?>,
                backgroundColor:["rgb(255, 26, 104)",
                "rgb(220, 48, 174)",
                "rgb(48, 148, 220)",
                "rgb(49, 170, 194)",
                "rgb(41, 204, 155)",
                "rgb(210, 196, 48)",
                "rgb(218, 103, 50)",
                "rgb(142, 220, 69)",
                "rgb(188, 10, 16)"
            ]
            
            }]
        },
        options:{
            maintainAspectRatio: false,
            indexAxis: 'y',
            
        }
    });
</script>
<!-- ******************************************************************chart5 bar Monitor -->

<!-- ******************************************************************chart5 bar Monitor -->
<script>
    let myChart6Ram = document.getElementById('myChart6Ram').getContext('2d')

    let ram = <?php echo json_encode($ram);?>

    let massPopChart6 = new Chart(myChart6Ram,{
        type: 'bar',// bar, horizontalBar, pie, Line, dougnut, radar, polarArea
        data:{
            labels: ram,
            datasets:[{
                label:'RAM',
                data:<?php echo json_encode($quantityRam);?>,
                backgroundColor:"rgb(255, 26, 104)"
            }]
        },
        options:{
            maintainAspectRatio: false,
            
        }
    });
</script>
<!-- ******************************************************************chart5 bar Monitor -->

</body>
</html>