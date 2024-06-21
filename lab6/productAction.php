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
  $message ="";

if( !array_key_exists("product_name", $_POST ) ||
	!array_key_exists( "price", $_POST ) ||
	!array_key_exists( "qty", $_POST ) ||
	!array_key_exists( "product_type", $_POST ) ||
	!array_key_exists( "description", $_POST )
    ) {
  header('location: addNewProduct.php');
  exit();
}

$product_name = $_POST[ "product_name" ];
$price = $_POST[ "price" ];
$qty = $_POST[ "qty" ];
$type = $_POST[ "product_type" ];
$description = $_POST[ "description" ];

  try {
    /* 3. Prepare and execute SQL . . . */
    $sql =  "INSERT INTO product (product_name, price, qty, product_type, description) ";
    $sql .= ' VALUES (:product_name, :price,:qty,:product_type,:description ) ';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':product_name', $product_name );
    $stmt->bindParam(':price', $price );
    $stmt->bindParam(':qty', $qty );
    $stmt->bindParam(':product_type', $type );
    $stmt->bindParam(':description', $description );
    $stmt->execute();

  } catch (PDOException $e) {
    die($e->getMessage());
  }
    /* 4. Check result . . . */
  if( $stmt->rowCount() == 1 ) {
      $message = "Insert new Product, the new Product ID is ".$pdo->lastInsertId();
  }
  else {
    $message = "Insert new Product Fail";
  }


  // print the Header;
  printHeader() ;
?>


<div class="container-fluid">
  <div class="row">
  <?php
   // print the Side Bar;
   printSideBar();
   ?>   
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      </div>


        <h3>Result </h3>
        <p><?=$message?></p>
        <p><a href="index.php">return to home page</a></p>

          <hr class="my-4">

        </form>
    </main>
  </div>
</div>
<?php

 // print the Footer;
  printFooter() ;
 ?>   


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="form-validation.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="index.js"></script>
    </body>
</html>
