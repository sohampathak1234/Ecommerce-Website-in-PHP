<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Users </title>

    <!-- BootStrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- FontWorld CDN  -->
    <script src="https://kit.fontawesome.com/902e474c5f.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php

    include 'mystore.php';
    $con = mysqli_connect('localhost', 'root', '', 'ecom');
    $Record = mysqli_query($con, "SELECT * FROM `tableusers`");
    $row_count = mysqli_num_rows($Record);
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 m-auto border border-success mt-3 bg-white">
                <table class="table table-secondary table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th> Sr.No.</th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Number </th>
                        <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody class="text-center text-success">
                        <?php
                        $n = 0;
                        while ($row = mysqli_fetch_array($Record)) {
                            echo "
                            <tr>
                                <td>" ;?> <?php echo ++$n; ?> <?php echo"</td>
                                <td>$row[UserName]</td>
                                <td>$row[Email]</td>
                                <td>$row[Number]</td>
                                <td><a href='delete.php?ID=$row[Id]' class='btn btn-outline-success text-center  text-decoration-none text-success'> Delete </a></td>
                            </tr>
                                ";
                        }
                        ?>
                    </tbody>
                </table>
                </div>
                <div class="col-md-2  pr-5  m-auto  mt-3 bg-white text-center">
                    <h3 class="text-successs"> Total </h3>
                    <h2 class="bg-success text-white"> <?php echo $row_count; ?> </h2>
                </div>


            
        </div>
    </div>


</body>

</html>