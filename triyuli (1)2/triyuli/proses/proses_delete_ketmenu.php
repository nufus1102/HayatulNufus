<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['hapus_kategori_validate'])) {
    $select = mysqli_query($conn, "SELECT kategori FROM tb_daftar_menu WHERE kategori = '$id'");

    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert ("Kategori telah digunakan pada Daftar Menu. Kategori tidak dapat dihapus");
        window.location="../ketmenu"
        </script>';
    } else {
        $query = mysqli_query($conn, "DELETE FROM tb_kategori_menu WHERE id_ket_menu ='$id'");
        if ($query) {
            $message = '<script>alert("Data Berhasil Di Hapus");
        window.location="../ketmenu"</script>';
        } else {
            $message = '<script>alert("Data Gagal Di Hapus";
        window.location="../ketmenu"</script>';
        }
    }
}
echo $message;
?>

<!-- unlink = hapus file foto -->