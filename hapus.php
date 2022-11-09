<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM genap where id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>