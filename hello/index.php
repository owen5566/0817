<?php 
    
    if(isset($_POST["btnOk"])){
        echo $_POST["txtUserName"];
        session_start();
        // $_SESSION["who"] = $_POST["txtUserName"];
        // echo $_SESSION["who"];
        echo session_status();
        // header("location: hello.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action = "">
        User name:<br>
        <input type="text" name="txtUserName" placeholder=":D"><br>
        <input type="submit" name="btnOk" value="OK"> 
        <br>
    </form>
</body>
</html>