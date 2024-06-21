<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Home</title>

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
    <link href="lab6.css" rel="stylesheet">
  </head>
  <body>
 <?php
    require_once "./inc/header.inc.php" ;
    require_once "./inc/footer.inc.php" ;
    require_once "./inc/sidebar.inc.php";
    require_once "./inc/db.inc.php";
$pdo = dbconnect();

try {
    $sql =  'SELECT * FROM staff ';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
  die($e->getMessage());
}

 //print the Header;
 printHeader() ;
?>


<div class="container-fluid">
  <div class="row">
  <?php
   printSideBar();
   ?>   
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      </div>


      <h3>Add New Staff form</h3>
  
        <form class="needs-validation" method="post"  action="staffAction.php" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

         
            <div class="col-12">
              <label for="salary" class="form-label">Salary</span></label>
              <input type="text" class="form-control" name="salary" id="salary" required>
              <div class="invalid-feedback">
                Please enter a valid salary
              </div>
            </div>
        
            <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" name="gender" id="gender" required>
                <option value="">Choose...</option>
                <option>M</option>
                <option>F</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid gender.
              </div>
            </div>
            <div class="col-md-6">
              <label for="position" class="form-label">Position</label>
              <select class="form-select" name="position" id="position" required>
                <option value="">Choose...</option>
                <option>manager</option>
                <option>sales person</option>
                <option>part time staff</option>
                <option>clerk</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid gender.
              </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address
              </div>
            </div>
        
          </div>

          <hr class="my-4">
          <input type="submit" />
          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Submit</button>
        </form>
    </main>
  </div>
</div>
<?php

 // print the Footer;
 printFooter( ) ;
 ?>   


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="index.js"></script>
    </body>
</html>
