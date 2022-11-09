<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_ruang = $_POST ['nama'];
    $jenis_ruang = $_POST ['jenis_ruang'];
    $kondisi = $_POST['kondisi'];

$sql = "INSERT INTO genap(nama_ruang,jenis_ruang,kondisi) VALUES ('$nama_ruang','$jenis_ruang','$kondisi')";
$query = mysqli_query ($koneksi,$sql);


}
?>