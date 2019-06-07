<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    echo "RESTRICTED AREA";
} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
        <meta charset="uft-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" /> 
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            
        </div>
    </body>
</html>