<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    echo "hello! ".$_SESSION["who"]." owo/";
    echo "<pre>";
    print_r($_SESSION);
    // session_unset();
?>
</body>
</html>