<!DOCTYPE html>
<html lang="en">
<head>
    <title>Done</title>
</head>
<form action= "prosestmb.php" method="POST">
<h2> Aplikasi Pendataan Ruang SMKN 1 SAYUNG </h2>
<body>
    <form>
        <fieldset>
            
            <p>
                <label for= "nama_ruang">Nama Ruang :</label> 
                <input type="text" name="nama" />
</p>

<p>
    <label for="jenis_ruang">Jenis Ruang : </label>
    <select name="jenis_ruang">
        <option value="Laboratorium">Laboratorium </option>
        <option value="Kantin">Kantin </option>
        <option value="Ruang Kelas">Ruang Kelas</option>
        <option value="Musholla">Musholla </option>
        <option value="Aula">Aula </option>
</select>

<p>
    <label for="Kondisi">Kondisi </label>
    <input type="text" name="kondisi" />
</p>

            <p>
                <input type="submit" value="tambah" name="tambah" />
            </p>


        </fieldset>
</form>
</body>
</html>