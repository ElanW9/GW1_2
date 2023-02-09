<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('../db.inc.php');

$products = getProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>Products
    </title>
</head>
<nav id="hamnav">
    <!-- (B) THE HAMBURGER -->
    <label for="hamburger">&#9776;</label>
    <input type="checkbox" id="hamburger" />

    <!-- (C) MENU ITEMS -->
    <div id="hamitems">
        <a href="/index.html">HOME</a>
        <a href="/about/a.html">ABOUT</a>
        <a href="/products/products.php">PRODUCTS</a>
        <a href="../login/login.php"><img class="cart" src="../img/cart-shopping-solid-yellow.png" alt="" /></a>
    </div>
</nav>

<body>
    <main>
        <div class="container">
            <div class="main_title">
                <h3>Products</h3>
            </div>
            <div class="parent">


                <?php foreach ($products as $key => $product) {

                    // var_dump($product);
                    // exit;
                ?>
                    <div>
                        <img src="<?= $product["IMG"] ?>" alt="" />
                        <h3><?= $product["name"] ?></h3>
                        <h5><?= $product["price"] ?></h5>
                        <p><?= $product["description"] ?></p>
                    </div>
                <?php } ?>


            </div>
        </div>
    </main>
</body>
<footer>
    <p>Copyright © 2023 Gaëlle Elias & Elan Wittevrongel</p>
</footer>

</html>