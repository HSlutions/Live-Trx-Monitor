<?php

//put your cool php code here 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <title>Transactions Live monitor</title>
</head>
<style type="text/css">
  body{

    background-color:black;
}
#bar-chart {
    height:450px;
}


</style>
<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
       
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
           
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/6 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php
                                                    echo number_format(12530);
                                                
                                        ?> USD
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Balance Account 1
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/6 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                   <?php
                                                    echo number_format(12530);
                                                
                                        ?> USD
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Balance Account 2
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/6 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                   <?php
                                                    echo number_format(12530);
                                                
                                        ?> USD
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Balance Account 3
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/6 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php
                                                    echo number_format(12530);
                                                
                                        ?> USD
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Balance Account 4
                                </a>
                            </div>
                        </div>


                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/6 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                     <?php
                                                    echo number_format(12530);
                                                
                                        ?> USD
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Balance Account 5
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/6 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php
                                                    echo number_format(12530);
                                                
                                        ?> USD
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Balance Account 6
                                </a>
                            </div>
                        </div>


                    </div>
                    
                    </div>
                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- card -->

                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-1/2">
                            
                            <div class="table-responsive">
                               <table class="table text-grey-darkest">
                                    <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">DATE</th>
                                        <th scope="col">CLIENT</th>
                                        <th scope="col">ITEM</th>
                                        <th scope="col">AMOUNT</th>
                                        <th scope="col">QUANTITY</th>
                                        <th scope="col">STATUS</th>
                                    </tr>
                                    </thead>

                                   
                                    <tbody>
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                    <td style='height:12px'><span class='label label-danger'>
                    <div class='bg-red-500 text-white font-bold rounded-t px-4 py-2'>
                                            NOT PAID
                    </div></span></td>
                    </tr>
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                    <td style='height:12px'><span class='label label-danger'>
                     <button class='bg-warning hover:bg-warning-dark text-white font-light py-1 px-2 rounded-full'>
                                                NOT FULLY PAID
                                            </button></span></td>
                    </tr>
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td style='height:12px'><span class='label label-danger'>
                    <button class='bg-warning hover:bg-warning-dark text-white font-light py-1 px-2 rounded-full'>
                                                PENDING
                                            </button></span></td>
                    </tr>

                     <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td><span class='label label-success'> 
                        <button class='bg-success hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full'>
                                                PAID
                                            </button></span></td>
                    </tr>

                      <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td><span class='label label-success'> 
                        <button class='bg-success hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full'>
                                                PAID
                                            </button></span></td>
                    </tr>
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td><span class='label label-success'> 
                        <button class='bg-success hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full'>
                                                PAID
                                            </button></span></td>
                    </tr>
                   <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td><span class='label label-success'> 
                        <button class='bg-success hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full'>
                                                PAID
                                            </button></span></td>
                    </tr>

                     <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td><span class='label label-success'> 
                        <button class='bg-success hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full'>
                                                PAID
                                            </button></span></td>
                    </tr>
                     <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                    <td style='height:12px'><span class='label label-danger'>
                    <div class='bg-red-500 text-white font-bold rounded-t px-4 py-2'>
                                            NOT PAID
                    </div></span></td>
                    </tr>
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                    <td style='height:12px'><span class='label label-danger'>
                     <button class='bg-warning hover:bg-warning-dark text-white font-light py-1 px-2 rounded-full'>
                                                NOT FULLY PAID
                                            </button></span></td>
                    </tr>
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td style='height:12px'><span class='label label-danger'>
                    <button class='bg-warning hover:bg-warning-dark text-white font-light py-1 px-2 rounded-full'>
                                                PENDING
                                            </button></span></td>
                    </tr>

                     <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                   <td><span class='label label-success'> 
                        <button class='bg-success hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full'>
                                                PAID
                                            </button></span></td>
                    </tr>
                  
                    <tr style="height:12px">
                    <td>01-01-2022</td>
                    <td>NDIKUMANA Ashley</td>
                    <td>Ingoma</td>
                    <td>USD 263</td>
                    <td>2</td>
                    <td style='height:12px'><span class='label label-danger'>
                     <button class='bg-warning hover:bg-warning-dark text-white font-light py-1 px-2 rounded-full'>
                                                NOT FULLY PAID
                                            </button></span></td>
                    </tr>
              
                    </tbody>
                    </table>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-1/2 pt-2">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Successful Payments: <strong> 75%  -  (750 transactions)</strong></div>
                            </div>
                            <div class="">
                                <div class="w-full">
                                    <div class="shadow w-full bg-grey-light mt-2">
                                        <div class="bg-teal-500 text-xs leading-none py-1 text-center text-white"
                                             style="width: 75%">75%
                                        </div>
                                    </div>
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Failed Transactions: <strong>25%  -  (250 transactions)</strong></div>
                            </div>

                                    <div class="shadow w-full bg-grey-300 mt-2">
                                        <div class="bg-red-800 text-xs leading-none py-1 text-center text-white"
                                             style="width: 25%">25%
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!--Solid Buttons-->
                             <br>
                        <div class="mb-2 mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-full lg:w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                            Failed transactions
                            </div>
                            <div class="p-3">
                                  
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-800 rounded">
                                     PAYMENT OF 3 INGOMA
                                </button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-800 rounded">
                                     PAYMENT OF 1 IGISEKE
                                </button>
                            </div>
                        </div>

                          <!--Top user 1-->
                        <div class="rounded rounded-t-lg overflow-hidden shadow max-w-full my-3">
                           <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                            TRANSACTION VOLUME PER TYPE
                            </div>
                          <div class="panel-body">
                                     <div id="bar-chart" ></div>
                                </div>
                           
                        </div>
                        <!--Top user 2-->
                        <!--/Solid Buttons-->
                        </div>
                    </div>
                   
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; H - SOLUTION</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="./main.js"></script>
</body>
<script>
var data = [
      { y: '01-01-2022', a: 5150, b: 2190},
      { y: '02-01-2022', a: 615,  b: 75},
      { y: '03-01-2022', a: 530,  b: 50},
      { y: '04-01-2022', a: 1175,  b: 650},
      { y: '05-01-2022', a: 3680,  b: 1165},
      { y: '06-01-2022', a: 990,  b: 270},
      { y: '07-01-2022', a: 100, b: 75},
      { y: '08-01-2022', a: 1615, b: 375},
      { y: '09-01-2022', a: 1290, b: 85},
      { y: '10-01-2022', a: 1435, b: 285},
      { y: '11-01-2022', a: 9160, b: 995}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Paid', ' Unpaid'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
config.element = 'bar-chart';
Morris.Bar(config);
config.stacked = true;

</script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>

</html>