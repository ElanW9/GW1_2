<?php



$errors = [
    "foutje",
    "niet rechtstreeks naar auth surfen aub!",
    "velden mogen niet leeg zijn",
    "username en password zijn niet juist"
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="./login.css" rel="stylesheet">
</head>
<nav id="hamnav">
    <!-- (B) THE HAMBURGER -->
    <label for="hamburger">&#9776;</label>
    <input type="checkbox" id="hamburger" />

    <!-- (C) MENU ITEMS -->
    <div id="hamitems">
        <a href="../index.php">HOME</a>
        <a href="../about.php">ABOUT</a>
        <a href="./products/products.php">PRODUCTS</a>
        <a href="../login/login.php"><img class="cart" src="../img/cart-shopping-solid-yellow.png" alt="" /></a>
    </div>
</nav>

<body>
    <main>
        <div class="container">
            <h1 class="main_title">Login</h1>
            <?php
            if (isset($_GET["error"])) {
                print $errors[$_GET["error"]];
            }
            ?>
            <form method="post" action="auth.php">
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </main>
</body>


</html>