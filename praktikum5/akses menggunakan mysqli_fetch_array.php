<html>
<head>
    <title>koneksi database MYSQL</title>
</head>
<body>
    <h1>koneksi database dengan 
        mysqli_fetch_array</h1>
    <?php
        $conn = mysqli_connect("localhost","root","","db_database")
        or die ("koneksi gagal");
        $hasil = mysqli_query($conn, "select * from mahasiswa2021");
        while ($row = mysqli_fetch_array($hasil)) 
        {
            echo "liga " . $row["negara"]; //array asosiatif
            echo "mempunyai" . $row[2];   //array numeris
            echo "wakil di liga champion <br>";
        }
    ?>
</body>
</html>