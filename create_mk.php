<!doctype html>
<html lang="en">
<head>
	<title>Tambah Matakuliah</title>
</head>

<body>
	<h1>Tambah Matakuliah</h1>
	<a href="matakuliah.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id</label>
		<br>
		<input type="text" name="id">
		<br>
		<label>Nama Matakuliah</label>
		<br>
		<input type="text" name="nama_mk"><br>
		<br><br>
		<button type="submit" name="submit_simpan_matakuliah">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>