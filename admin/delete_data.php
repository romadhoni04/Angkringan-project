<?php
include "connection/koneksi.php";

$kode = $_GET['kode'];
$query = mysqli_query($conn, "Delete from tb_dataangkringan where kode = '$kode'");
//header('Location = data_angkringan.php');
 echo '<script LANGUAGE="JavaScript">
            alert("Data dengan kode :('.$_GET['kode'].') Di hapus")
            window.location.href="index.php";
            </script>';

?>