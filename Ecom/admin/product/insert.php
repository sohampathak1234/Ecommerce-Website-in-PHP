<?php

if(isset($_POST['submit'])){
        include 'Config.php';
    $plant_name = $_POST['PName'];                  
    $plant_price = $_POST['PPrice'];
    $plant_stock = $_POST['PStock'];
    $plant_image = $_FILES['PImage'];
    $image_loc = $_FILES['PImage']['tmp_name'];
    $image_name = $_FILES['PImage']['name'];
        $img_des = "UploadedImage/".$image_name;
    move_uploaded_file($image_loc, "UploadedImage/".$image_name);
    
    $plant_category = $_POST['Pages'];


    // insert plant

    mysqli_query($con, "INSERT INTO `tblproduct`( `PName`, `PPrice`, `PStock`, `PImage`, `PCategory`) 
    VALUES ('$plant_name','$plant_price','$plant_stock','$img_des','$plant_category')");
    
    header("location:index.php");


}

?>
