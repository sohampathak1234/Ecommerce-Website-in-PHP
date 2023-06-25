<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Login </title>

    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #788888;
        }
    </style>

</head>
<body>
    
   
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow p-3 bg-white m-auto border border-success mt-3">
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 fw-bold text-success">User Login </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Username or Email:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Username">
                    </div>

                
                    <div class="mb-3">
                        <label class="form-label text-success">Password:</label>
                        <input type="password" name="userpassword" class="form-control" placeholder="Enter Password">
                    </div>
                    
                    <button name="submit" class="bg-success bg-opacity-50 fs-4 fu-bold my-3 form-control text-white">Login</button>

                    <button class="bg-success bg-opacity-50 fs-4 fu-bold my-3 form-control  "> <a href="register.php" class="text-decoration-none text-white">Registeration </a></button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>