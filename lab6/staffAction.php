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

if( !array_key_exists("firstName", $_POST ) ||
	!array_key_exists( "lastName", $_POST ) ||
	!array_key_exists( "salary", $_POST ) ||
	!array_key_exists( "gender", $_POST ) ||
	!array_key_exists("position", $_POST ) ||
	!array_key_exists("email", $_POST ) 
    ) {
  header('location: addNewStaff.php');
  exit();
}

$firstName = $_POST[ "firstName" ];
$lastName = $_POST[ "lastName" ];
$salary = $_POST[ "salary" ];
$gender = $_POST[ "gender" ];
$position = $_POST[ "position" ];
$email = $_POST[ "email" ];

  try {
    /* 3. Prepare and execute SQL . . . */
    $sql =  "INSERT INTO staff (firstName, lastName,salary,gender,position,email) ";
    $sql .= ' VALUES (:firstName, :lastName,:salary,:gender,:position,:email) ';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':firstName', $firstName );
    $stmt->bindParam(':lastName', $lastName );
    $stmt->bindParam(':salary', $salary );
    $stmt->bindParam(':gender', $gender );
    $stmt->bindParam(':position', $position );
    $stmt->bindParam(':email', $email );
    $stmt->execute();

  } catch (PDOException $e) {
    die($e->getMessage());
  }
    /* 4. Check result . . . */
  if( $stmt->rowCount() == 1 ) {
      $message = "Insert new staff successfull, the new staff ID is ".$pdo->lastInsertId();
  }
  else {
    $message = "Insert new staff Fail";
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
