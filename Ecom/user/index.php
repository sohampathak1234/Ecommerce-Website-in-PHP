<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>
    <?php
    include "header.php";
    ?>
</head>

<body>

    <h1 class="text-success text-center my-3">Home</h1>

    <div class="container-fluid">
        <div class="colmd-12">
            <div class="row">
                <?php
                include '../admin/product/Config.php';
                $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
                while ($row = mysqli_fetch_array($Record)) {
                    $check_page = $row['PCategory'];
                    echo  "
                <div class='col-md-6 col-lg-4 m-auto mb-3'>
                    <form action='InsertCart.php' method='POST'>
                    <div class='card m-auto' style='width: 18rem;'>
                    <img src='../admin/product/$row[PImage]' class='card-img-top' alt='$row[PName]'>
                        <div class='card-body'>
                            <h5 class='card-title text-center fs-4'>$row[PName]</h5>
                            <p class='card-text text-center'> Rs. $row[PPrice] /-</p>
                            <input type='hidden'  name='PName' value = '$row[PName]'>
                            <input type='hidden'  name='PPrice' value = '$row[PPrice]'>
                            <input type='number' name = 'PQuantity' value='min='1' max='20'' placeholder = 'Quantity'><br><br>
                            <input type='submit' name = 'addCart' class='btn btn-success text-white w=100 text-center' value='Add to Cart'><br><br>            
                        </div>
                    </div>
                    </form>
                </div>
                ";
                }
                ?>
            </div>
        </div>
    </div>





</body>

</html>