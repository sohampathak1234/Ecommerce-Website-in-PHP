<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Home Page </title>
 
    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>
</head>

<!-- Session for accessing MyStore Admin Page  -->
<?php
  session_start();
  if(!$_SESSION['admin']){
      header("location:form/login.php");
  }
?>

<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand text-success"><h1> Admin HomePage </h1> </a>
  
    <span>
    <i class="fa-solid fa-user"></i>
    Hello, <?php echo $_SESSION['admin']; ?> | 
    <i class="fa-solid fa-arrow-right-from-bracket"></i>
    <a href ="form/logout.php">Log Out </a>
     |
    <a href ="mystore.php">UserPanel </a>
    </span>
  
  </div>
</nav>

<div>
  <h2 class="text-center"> DashBoard </h2>
</div>

<div class="col-md-6 bg-success text-center m-auto  ">
  <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5"> Add Post <a> |
  <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5"> Users <a>
</div>
<l>
               



<?php
    include'../footer.php';
?>
</body>
</html>



