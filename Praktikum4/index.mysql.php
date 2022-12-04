<?php
$conn = mysqli_connect("127.0.0.1","root","");
if($conn){
    echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
mysqli_select_db($conn, "db_database");
$select = mysqli_query($conn,"SELECT * FROM db_2a_mahasiswa")
?>