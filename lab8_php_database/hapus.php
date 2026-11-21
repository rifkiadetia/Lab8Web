<?php
include_once 'koneksi.php';
$id = (int) $_GET['id'];
mysqli_query($conn, "DELETE FROM data_barang WHERE id_barang = $id");
header('location: index.php');
exit;
?>