<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $pendidikan = $_POST["pendidikan"];

  // Lakukan sesuatu dengan data form, seperti menyimpan ke database
  echo "Terima kasih, $nama. Data yang Anda masukkan adalah:<br>";
  echo "Alamat: $alamat<br>";
  echo "Tempat Lahir: $tempat_lahir<br>";
  echo "Tanggal Lahir: $tanggal_lahir<br>";
  echo "Jenis Kelamin: $jenis_kelamin<br>";
  echo "Pendidikan: $pendidikan<br>";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <!-- Form HTML yang telah dibuat sebelumnya -->
</form>