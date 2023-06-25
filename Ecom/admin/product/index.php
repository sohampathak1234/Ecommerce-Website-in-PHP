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

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-success mt-3  bg-white">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-success">Plants Details</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Plant Name:</label>
                        <input type="text" name="PName" class="form-control" placeholder="Enter Plant Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Plant Price:</label>
                        <input type="text" name="PPrice" class="form-control" placeholder="Enter Plant Price">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Plant Stocks:</label>
                        <input type="text" name="PStock" class="form-control" placeholder="Enter the Stock">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Add Plant Image:</label>
                        <input type="file" name="PImage" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-success">Select Category</label>
                        <select class="form-select" name="Pages">
                            <option selected>Select Plant Category</option>
                            <option value="Indoor">Indoor</option>
                            <option value="Outdoor">Outdoor</option>
                        </select>
                    </div>

                    <button name="submit" class="bg-success bg-opacity-50 fs-4 fu-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>




    <!-- fetch data  -->

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">

                <table class="table table-hover border my-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Type</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'Config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                        while ($row = mysqli_fetch_array($Record))

                            echo "

                            <tr>
                            <th>$row[Id]</th>
                            <td>$row[PName]</td>
                            <td>$row[PPrice]</td>
                            <td><img src='$row[PImage]' height='90px' width ='100px'></td>
                            <td>$row[PCategory]</td>
                            <td>$row[PStock]</td>
                            <td><a href='update.php?ID=$row[Id]' class='btn btn-success'>Update</td>
                            <td><a href='delete.php?ID=$row[Id]' class='btn btn-success'>Delete</td>
                            </tr>
                            ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</body>

</html>