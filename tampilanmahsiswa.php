<!DOCTYPE html>
<html>
<head>
</head>
<title> Data Mahasiswa </title>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamt'];
$tempat_lahir = $_POST["tempatlahir"];
$tanggal_lahir = $_POST["tanggallahir"];
$jeniskel = $_POST['Jeniskel'];
$pekerjaan = $_POST['Pekerjaan'];

?>
<table border="1" bgcolor="Cyan">
<tr>
<td colspan="2" align="center"><b>Data Mahasiswa</b></td>
</tr>
<tr>
<td>Nama</td><td><?php echo $nama; ?></td>
</tr>
<tr>
<td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<tr>
<td>tempat lahir</td><td><?php echo $tempat_lahir; ?></td>
</tr>
<tr>
<td>tanggal lahir</td><td><?php echo $tanggal_lahir; ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<tr>
<td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td>
</tr>
</table>
<a href="from_inputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>