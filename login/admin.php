<?php
session_start();
include("./db.inc.php");

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    header("Location: login.php");
    exit;
}

// if (isset($_POST['new_prod'])) {
//     $name = $_POST['name'];
//     $price = $_POST['price'];
//     $description = $_POST['description'];
//     $IMG = $_POST['IMG'];

//     $query = "INSERT INTO products (name, price, description, IMG) VALUES(:name, :price, :description, :IMG)";
//     $query_run = $conn->$prepare($query);
//     $data = [
//         ':name' => $name,
//         ':price' => $price,
//         ';description' => $description,
//         ':IMG' => $IMG
//     ];
//     $query_execute = $query_run->execute($data);
// }
function saveToDb($data, $conn)
{
    $sql = "INSERT INTO products (name, price, description, IMG) VALUES(:name, :price, :description, :IMG)";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $data['name']);
    $statement->bindParam(':price', $data['price']);
    $statement->bindParam(':description', $data['description']);
    $statement->bindParam(':IMG', $data['IMG']);
}


?>
<!-- https://static.artfido.com/2019/01/van_gogh_never_aja_kusick_003.jpg -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>

<body>

    <main>
        <div class="container">
            <h1 class="main_title">Admin</h1>
            <h2 class=main_title>Hallo <?= $_SESSION["username"] ?></h2>

            <form method="post" action="admin.php">
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div>
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="">
                </div>
                <div>
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="">
                </div>
                <div>
                    <label for="IMG" class="form-label">IMG</label>
                    <input type="text" class="form-control" id="IMG" name="IMG" value="">
                </div>
                <button type="submit" class="button" name="new_prod">Add new product</button>
            </form>
        </div>
    </main>
    <section><button><a href="logout.php">uitloggen</a></button></section>
</body>

</html>