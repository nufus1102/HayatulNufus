<html>
<head>
    <title>koneksi database Mysql</title>
</head>
<body>
    <h1>koneksi database dengan 
        mysqli_fetch_assoc</h1>
    <?php
        $conn = mysqli_connect("localhost","root","","db_database")
        or die ("koneksi gagal");
        $hasil = mysqli_query($conn, "select * from mahasiswa2021");
        while ($row = mysqli_fetch_array($hasil))
        {
            echo "liga " .$row["1"];
            echo " mempunyai " .$row["2"];
            echo " wakil di liga champion <br>";
        }
    ?>
</body>
</html>