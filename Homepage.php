<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <div style="text-align: center; padding: 15%">
        <p style = "font-size:50px; font-weight: bold">
            Home Page
        </p>
        <a href="Logout.php">Logout</a>
    </div>
</body>
</html>