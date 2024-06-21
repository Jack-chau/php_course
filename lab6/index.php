<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>lab6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/lab6/">

    

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
 <?php
 //require header.inc.php here
 //require footer.inc.php here
 require_once "./inc/header.inc.php" ;
 require_once "./inc/footer.inc.php" ;
 require_once "./inc/sidebar.inc.php";
// print the Header;
 printHeader( ) ;
 ?>   

<div class="container-fluid">
  <div class="row">
  <?php
   printSideBar();
   ?>   
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="row">
        <h3 class="h3">lab6</h3>
        <hr class="my-4">

      </div>
      <div class="row">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      
       
        <h1 class="h1">Sales Trend Chart</h1>
    
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="salesTrendChart" width="900" height="380"></canvas>
      <!-- include chart.js library below -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        // put the labels array below
        const labels = [ 'January', 'February', 'March', 'April', 'May', 'June', 'July' ] ;
          // put the data below
        const data = {
                        labels : labels,
                        datasets : [ {
                                        label : 'Product' ,
                                        backqroundColor : 'rgb( 255, 99, 132 )' ,
                                        boederColor : 'rgb( 255, 99, 132 )' ,
                                        data : [ 100, 345, 255, 123, 321, 226, 673 ] ,
                        } ]
        } ;
          // put the config below
        const config = {
          type : 'line' ,
          data : data,
          options: { }
        } ;
          // complete the coding to create the chart
        const myChart = new Chart(
                                    document.getElementById( 'salesTrendChart' ) ,
                                    config
        ) ;
      </script>

      </div>
     
    
    
    </main>
  </div>
</div>
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="addNewStaff.php" class="nav-link px-2 text-muted">Add New Staff</a></li>
      <li class="nav-item"><a href="staff.php" class="nav-link px-2 text-muted">Staff</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">VTC website</a></li>
    </ul>
    <p class="text-center text-muted">&copy;Company</p>
  </footer>
<?php

 // print the Footer;
 printFooter( ) ;
 ?>   


      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        
     <script src="index.js"></script>
  </body>
</html>
