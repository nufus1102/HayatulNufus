<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

$password = md5('pass');

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($conn, "UPDATE tb_user SET pass=md5 ('password') WHERE id='$id'"); 
    if($query) {
        $message = '<script>alert("Password Berhasil Direset");
        window.location="../user"</script>';
    }else{
        $message = '<script>alert("Password Gagal Direset")</script>';
    }
}echo $message;
?>