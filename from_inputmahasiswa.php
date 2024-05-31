<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>
<form action = "tampilanmahsiswa.php" method = "POST">
    <b>Isi form Dibawah ini</b>
    <br>
    <pre>
        Nama : <input type="text" name="nama" >
        Alamat : <textarea name="alamt" rows="5" cols="40"></textarea>
        Tempatlahir : <input type="text" name="tempatlahir" >
        Tanggal Lahir<input type="date" class="form-control" name="tanggallahir" placeholder="Masukan Tanggal lahir Anda"></td>
</pre>
        Jenis_kelamin:
        <input type="radio" name ="Jeniskel" value ="Laki-Laki"> Laki - Laki
        <input type="radio" name ="Jeniskel" value ="Perempuan"> Perempuan
<p>
    Pendidikan  :
    <select name ="Pekerjaan">
    <option value ="-pilih-">
    <option value ="Pelajar">Pelajar
    <option value ="Mahasiswa">Mahasiswa
    <option value ="Karyawan">Karyawan
    <option value ="Wirausahan">Wirausahan
    <option value ="Lain - Lain">Lain - Lain
</select>
<p>
    <input type="submit" value="kirim"><input type="reset" value="batal">
</form>
</body>
</html>