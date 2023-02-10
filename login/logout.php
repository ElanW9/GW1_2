<?php
session_start();
session_destroy();

header("Location: ../products/products.php");
exit;
