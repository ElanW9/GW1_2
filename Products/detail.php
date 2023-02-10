<?php
$id = $_GET["id"];
include("../db.inc.php");
$product = getProduct($id);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <title>Document</title>
</head>

<body>

    <main>
        <h2 class="main_title"><a href="./products.php">Return</a></h2>
        <div class="parent">

            <div>

                <img src="<?= $product["IMG"] ?>" alt="" />
                <h3><?= $product["name"] ?></h3>
                <h5><?= $product["price"] ?></h5>
                <p><?= $product["description"] ?></p>

            </div>
        </div>
    </main>
</body>
<footer>
    <p>Copyright © 2023 Gaëlle Elias & Elan Wittevrongel</p>
</footer>


</html>