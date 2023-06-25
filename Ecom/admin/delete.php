<?php

$id = $_GET['ID'];
$con = mysqli_connect('localhost', 'root', '', 'ecom');
mysqli_query($con, "DELETE  FROM `tableusers` WHERE Id = $id");
header("location:user.php");

?>