<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'gw1';
$db_port = 8889;

try {
    $pdo = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}



function getProducts()
{
    global $pdo;

    $stmt = $pdo->prepare(" SELECT * FROM `products`");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
