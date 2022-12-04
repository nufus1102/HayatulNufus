<?php
session_start();
if(!empty($_SESSION['username-xyz']))
{
    header("location:dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta nama="viewport" content="width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <H1>login</H1>
    <form action="proses.php" method="POST">
        <table border="0">
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
</tr>
<tr>
    <td>password</td>
    <td><input type="passsword" name="passsword"></td>
</tr>
<tr>
    <td>password</td>
    <td><input type="submit" name="login"></td>
</tr>
</body>

