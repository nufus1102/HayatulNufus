session_start();
if(empty($_SESSION['username_xyz']))
{
    header("location:login.php");
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
    <h2>INI ADALAH HALAMAN DASHBOARD</h2>
    <a href="logout.php">logout</a>
</body>
</html>