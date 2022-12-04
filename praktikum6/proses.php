<?php
session_start();
// if (isset($_POST[Username])){
// echo "Koneksi Berhasil"."<br>";
//}else{
//echo"Koneksi Gagal";
//}

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

// if (empty($Username) || empty ($password)){
// echo"Username dan password tidak boleh kosong";
//}
//else if ($Username =="admin" && $password =="123"){
//echo"selamat anda berhasil login";
//}else{
echo"Mohon maaf anda gagal login";
//}
if(empty($Username) || empty($_POST['password'])){
    echo" <script>alert('Username dan password tidak boleh kosong');
    </script>";
}
else
{
    $conn = mysqli_connect("127.0.0.1","root","","mahasiswa");
    $query = mysqli_query($conn,"SELECT*FROM db_2a_mahasiswa WHERE NIM='$Username' && password'");
    $data = mysqli_fetch_array($query);
    if($data){
        // echo "<script>window.location='dashboard.php'</script>";
        $_SESSION['username_xyz']=$Username;
        header("location:dashboard.php");
    }else{
        echo "<script>alert('anda gagal login');
        window.history.back();
        </script>";
    }
}
?>