<html>

<head>

<title> Masukan Data</title>

</head>

<body>

<h1> Masukan Identitas Anda<h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<pre>

Isikan Nama : <input type="text" name="nama">

Isikan No Telp

: <input type="text" name="notelp"> Isikan Alamat

: <textarea name="alamat" rows="5" cols="40"></textarea> <input type="submit" value="TAMPIL"><input type="reset" value="BATAL">

</pre>

</form>

<?php

Snama = $_POST['nama'];

Stelp = $_POST['notelp'];

Salamat = $_POST['alamat'];

if(lempty($nama)){

echo "Nama : Snama <br>";)

if(lempty($telp)){

echo "No Telp : Stelp <br>"; }

if (lempty(Salamat)){

echo "Alamat : Salamat <br>";}

?>

</body>

</html>