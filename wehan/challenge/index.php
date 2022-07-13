<!DOCTYPE html>
<?php
require_once "actions/db_connect.php";
require_once "components/boot.php";
$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql);
$body = "";
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);// mysqli_fetch_assoc()
if (mysqli_num_rows($result) == 0) {
    $body = "No results";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $body .= "<div class='card' style='width: 18rem;'>
        <img src={$row["picture"]} class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>{$row["name"]} {$row["id"]}</h5>
    <p class='card-text'>{$row["price"]} €</p>
    <a href='#' class='btn btn-primary'>Details</a>
    <a href='#' class='btn btn-warning'>Update</a>
    <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
  </div>
</div>";
    }
}

mysqli_close($connect);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

</head>

<body>
    <a href="create.php">Create dish</a>
    <hr>
    <div class="container">
        <div class="row rows-col-lg-4 rows-col-md-2 rows-col-sm-1">
            <?= $body ?>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

</body>

</html>