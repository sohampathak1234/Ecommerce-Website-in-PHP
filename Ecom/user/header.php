<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand text-success" href="header.php"><h1>The Plant Emporium</h1></a>
    
    <div class="d-flex">
        <a href="index.php" class =" text-success text-decoration-none pe-2"><i class="fas fa-home"></i> Home </a>|  
        <a href="viewCart.php" class =" text-success text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i> Cart(<?php echo $count ?>) </a>|  

        <span class = "text-success pe-2">
            <i class="fas fa-user-shield"></i>Hello,
            <?php  
            if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
                echo " |
                <a href='form/logout.php' class =' text-success text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Log Out </a> | 
                ";
            }
            else{
                echo"
                <a href='form/login.php' class =' text-success text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Login </a>| 
                ";
            }
            ?> 
            <a href="../admin/mystore.php" class =" text-success text-decoration-none pe-2"> Admin </a>
        </span>
    </div>
 
    
  </div>
</nav>
    
<div class="bg-success">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="indoor.php" class="text-decoration-none text-white fs-4 px-5">Indoor Plants</a></li>
        <li><a href="outdoor.php" class="text-decoration-none text-white fs-4 px-5">Outdoor Plants</a></li>
    </ul>
</div>


<?php
    include'../footer.php';
?>

</body>
</html>