<?php
$username = $_POST['username'];
$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']);
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$IPK = $_POST['Alamat'];

if(empty($Username) || empty($Password1) || empty($Password2)){
    echo "Username dan password tidak boleh kosong";
}elseif($Password1 != $Password2){
    echo "Confirm password harus sama";
}else{
    $conn = mysqli_connect("127.0.0.1","root","","Mahasiswa");
    $query = mysqli_query($conn,"INSErT INTO db_2a_mahasiswa (Nim,Password,Nama,Kelas,Alamat,IPK)VALUES ('$password1','$Nama','$Kelas','$Alamat','$IPK')");
    if($query){
        echo "selamat anda berhasil mendaftar";
    }else{
        echo "Anda gagal mendaftar";
    }
}
?>