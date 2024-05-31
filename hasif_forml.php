<?php
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $location = $_POST['lokasi'];
    $gender = $_POST['jenis_kelamin'];
    $skills = $_POST['skill'];

    // You can now use these variables in your PHP script
    // For example, to save them to a database or display them

    echo "Nama: " . $name;
    echo "<br>";
    echo "Email: " . $email;
    echo "<br>";
    echo "lokasi: " . $location;
    echo "<br>";
    echo "Jenis Kelamin: " . $gender;
    echo "<br>";
    echo "Skills: " . implode(', ', $skills);
?>