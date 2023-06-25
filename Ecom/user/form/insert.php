<?php

$Con = mysqli_connect('localhost', 'root', '', 'ecom');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['userpassword'];

    // Check duplication
    $Dup_Email = mysqli_query($Con,"SELECT * FROM `tableusers` WHERE Email = '$Email' ");
    $Dup_username = mysqli_query($Con,"SELECT * FROM `tableusers` WHERE UserName = '$Name' ");

    if(mysqli_num_rows($Dup_Email)){
        echo "
        <script>
        alert('This Email is Already Taken');
        window.location.href = 'register.php';
        </script>
        ";
    }
    elseif(mysqli_num_rows($Dup_username)){
        echo "
        <script>
        alert('This Username is Already Taken');
        window.location.href = 'register.php';
        </script>
        ";
    }
    else{
        mysqli_query($Con, "INSERT INTO `tableusers`(`UserName`, `Email`, `Number`, `Password`) 
        VALUES ('$Name','$Email','$Number','$Password')");
        echo "
        <script>
        alert('Register Successfully');
        window.location.href = 'register.php';
        </script>
        ";
    }
}

?>
