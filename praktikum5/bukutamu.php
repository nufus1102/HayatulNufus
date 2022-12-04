<html>
<head>
    <title>Simpan Buku Tamu</title>
</head>
<body>
    <h1>Simpan Buku Tamu MYSQL</h1>
<?php
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];
        $conn=mysqli_connect ("localhost","root","","db_database") or die ("koneksi gagal");
        echo "nama          :$nama <br>";
        echo "email         :$email <br>";
        echo "komentar      :$komentar <br>";
        $hasil = mysqli_query($conn,"insert into bukutamu (nama, email, komentar) values 
        ('$nama','$email','$komentar')");
        echo "Simpan bukutamu berhasil dilakukan";
?>
</body>
</html>