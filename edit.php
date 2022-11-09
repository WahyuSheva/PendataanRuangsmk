<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM genap where id=$kode";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1> Form Edit  </h1>
    <form action ="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
            <p>
                <label name="nama">Nama Ruang : </label>
                <input type="text" name= "nama" value= "<?php echo $data['nama_ruang']?>" /></p>

                <p>
                <label name="jenis_ruang">Jenis Ruang : </label>
                <select name="jenis_ruang">
                    <option value="Laboratorium">Laboratorium </option>
                    <option value="Kantin">Kantin </option>
                    <option value="Ruang Kelas">Ruang Kelas</option>
                    <option value="Musholla">Musholla </option>
                    <option value="Aula">Aula </option>
                </select>

                <p>
                <label name="kondisi">Kondisi : </label>
                <input type="text" name= kondisi value="<?php echo $data['kondisi']?>" /></p>

                <p>
                <input type="submit" value="Simpan" name="simpan" />
</p>
</fieldset>
</form>
</body>
</html>