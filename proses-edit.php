<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
$kode =$_POST['id'];
$nama_ruang = $_POST['nama'];
$jenis_ruang = $_POST['jenis_ruang'];
$kondisi = $_POST['kondisi'];

$sql = "UPDATE genap SET nama_ruang ='$nama_ruang', jenis_ruang ='$jenis_ruang', kondisi ='$kondisi' WHERE id=$kode";
$query= mysqli_query($koneksi,$sql);

if($query){
    header('Location:tampil.php');
} else{
    die ("gagal mengedit");

}}
else{
    die("akses dilarang");
}
?>