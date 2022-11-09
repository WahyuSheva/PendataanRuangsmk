<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<h2>Tampilan</h2>
	<a href="tambah.php"> </a>
	<table border="1">
		<tr>
			<th>Nama Ruang</th>
			<th>Jenis Ruang</th>
			<th>Kondisi</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include ("koneksi.php");
		$sql = "SELECT * FROM genap";
		$query = mysqli_query($koneksi,$sql);
		
		while($data = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$data['nama_ruang']."</td>";
			echo "<td>".$data['jenis_ruang']."</td>";
			echo "<td>".$data['kondisi']."</td>";
			echo "<td>";
			echo "<a href='edit.php?id=".$data['id']."'>Edit</a> |";
			echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
			echo "</td>";
			echo "</tr>";
			}
		?>
	</table>
</body>
</html>