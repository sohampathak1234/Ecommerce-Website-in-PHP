<?php
$con = mysqli_connect('localhost','root','','ecom');

$Aname = $_POST['username'];
$Apassword = $_POST['userpassword'];

// validate username and password 

$result  = mysqli_query($con, "SELECT * FROM `admin` WHERE username ='$Aname' AND userpassword = '$Apassword' ");

session_start(); //Session for Login

if(mysqli_num_rows($result)){

        $_SESSION['admin'] = $Aname;
        

    echo"
        <script>
        alert('Login Successfully');
        window.location.href='../mystore.php';
        </script>
    ";
}
else{
    echo"
        <script>
        alert('Invalid username/password');
        window.location.href='login.php';
        </script>
    ";
}

?>