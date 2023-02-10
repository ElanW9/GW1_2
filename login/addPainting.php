<?php
require("./db.inc.php");
function saveToDb($data, $conn)
{
    $sql = "INSERT INTO products (name, price, description, IMG) VALUES(:name, :price, :description, :IMG)";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $data['name']);
    $statement->bindParam(':price', $data['price']);
    $statement->bindParam(':description', $data['description']);
    $statement->bindParam(':IMG', $data['IMG']);
}
