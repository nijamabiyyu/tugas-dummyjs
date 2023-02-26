<?php
require_once "jquery.php";

$idorder = $_POST['idorder'];
$idbarang = $_POST['idbarang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$barang = $_POST['barang'];
$idpelanggan = $_POST['idpelanggan'];
$pelanggan = $_POST['pelanggan'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO `tblorderdetail`(`idorderdetail`, `idorder`, `idbarang`, `jumlah`, `harga`, `barang`, `idpelanggan`, `pelanggan`, `alamat`) VALUES (' ','$idorder','$idbarang','$harga','$barang','$idpelanggan','$pelanggan','$alamat')";

$result = mysqli_query($conn,$sql);



?>