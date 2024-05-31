<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form Action ="hasif_forml.php" method="post">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama"><br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="lokasi">Lokasi:</label>
  <select id="lokasi" name="lokasi">
    <option value="">Select a location</option>
    <option value="location1">Location 1</option>
    <option value="location2">Location 2</option>
    <option value="location3">Location 3</option>
  </select><br><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki Laki">
  <label for="laki_laki">Laki Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
  <label for="perempuan">Perempuan</label><br><br>

  <label for="skill">Skill:</label>
  <input type="checkbox" id="php" name="skill[]" value="PH">
  <label for="php">PH</label>
  <input type="checkbox" id="mysql" name="skill[]" value="MySQL">
  <label for="mysql">MySQL</label>
  <input type="checkbox" id="javascript" name="skill[]" value="Javascript">
  <label for="javascript">Javascript</label>
  <input type="checkbox" id="html" name="skill[]" value="HTML">
  <label for="html">HTML</label>
  <input type="checkbox" id="css" name="skill[]" value="CSS">
  <label for="css">CSS</label><br><br>

  <input type="submit" value="Simpan">
</form>
</body>
</html>
</form>
</body>
</html>