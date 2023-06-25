<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>

    <!-- Bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
     body{
        background-color: #788888;
     }
    </style>
</head>

<body>
    <div class="mb-3">
        <p class="text-center fw-bold fs-3 text-white">Admin</p>
    </div>

    <?php
    $id = $_GET['ID'];
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id = $id");
    $data = mysqli_fetch_array($Record);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-success mt-3  bg-white">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-success">Plant Update</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Plant Name:</label>
                        <input type="text" value="<?php echo $data['PName'] ?>" name="PName" class="form-control" placeholder="Enter Plant Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Plant Price:</label>
                        <input type="text" value="<?php echo $data['PPrice'] ?>" name="PPrice" class="form-control" placeholder="Enter Plant Price">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Plant Stocks:</label>
                        <input type="text" value="<?php echo $data['PStock'] ?>" name="PStock" class="form-control" placeholder="Enter the Stock">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Add Plant Image:</label>
                        <input type="file" name="PImage" class="form-control">
                        <img src="<?php echo $data['PImage']  ?>" alt="" style="height: 100px ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Select Category</label>
                        <select class="form-select" name="Pages">
                            <option selected>Select Plant Category</option>
                            <option value="Indoor">Indoor</option>
                            <option value="Outdoor">Outdoor</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value=" <?php echo $data['Id'] ?>">
                    <button name="update" class="bg-success bg-opacity-50 fs-4 fu-bold my-3 form-control text-white"> Update </button>
                </form>
            </div>
        </div>
    </div>


    <!-- php update code  -->
    <?php

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $plant_name = $_POST['PName'];
        $plant_price = $_POST['PPrice'];
        $plant_stock = $_POST['PStock'];
        $plant_image = $_FILES['PImage'];
        $image_loc = $_FILES['PImage']['tmp_name'];
        $image_name = $_FILES['PImage']['name'];
        $img_des = "UploadedImage/".$image_name;
        move_uploaded_file($image_loc, "UploadedImage/".$image_name);
    
        $plant_category = $_POST['Pages'];

        include 'Config.php';
        mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$plant_name',
                                    `PPrice`='$plant_price',`PStock`='$plant_stock',
                                    `PImage`='$img_des',`PCategory`='$plant_category' 
                                    WHERE Id = $id");

        header("location:index.php");
    }   

    ?>


</body>

</html>
