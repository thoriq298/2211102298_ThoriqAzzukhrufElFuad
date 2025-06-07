<?php 
    // Variabel
    $nama = "Mbak F";
    $umur = 22;
    echo "Halo, nama saya $nama dan saya berumur $umur tahun.<br>";

    // Operator
    $a = 10;
    $b = 5;
    echo "Hasil penjumlahan: " . ($a + $b) . "<br>";

    // IF-ELSE
    $nilai = 80;
    if ($nilai >= 75) {
        echo "Lulus<br>";
    } else {
        echo "Tidak Lulus<br>";
    }

    // SWITCH
    $hari = "Senin";
    switch ($hari) {
        case "Senin":
            echo "Hari ini Senin<br>";
            break;
        case "Selasa":
            echo "Hari ini Selasa<br>";
            break;
        default:
            echo "Hari tidak diketahui<br>";
    }

    // FOR
    for ($i = 1; $i <= 5; $i++) {
        echo "Angka ke-$i <br>";
    }

    // WHILE
    $x = 1;
    while ($x <= 5) {
        echo "Angka $x <br>";
        $x++;
    }

    // FOREACH
    $buah = ["Apel", "Jeruk", "Mangga"];
    foreach ($buah as $b) {
        echo "Buah: $b <br>";
    }

    // Array
    $hewan = ["Kucing", "Anjing", "Burung"];
    echo "Hewan pertama: " . $hewan[0] . "<br>";
?>

Form GET
<form method="GET" action="">
    Nama (GET): <input type="text" name="nama_get">
    <input type="submit" value="Kirim GET">
</form>

<?php
// Menampilkan hasil dari input GET form
if (isset($_GET['nama_get'])) {
    echo "Nama yang dikirim dengan GET: " . htmlspecialchars($_GET['nama_get']) . "<br>";
}
?>

<!-- Form POST -->
<form method="POST" action="">
    Nama (POST): <input type="text" name="nama_post">
    <input type="submit" value="Kirim POST">
</form>

<?php
// Menampilkan hasil dari input POST form
if (isset($_POST['nama_post'])) {
    echo "Nama yang dikirim dengan POST: " . htmlspecialchars($_POST['nama_post']) . "<br>";
}

// Session
session_start();
$_SESSION['user'] = 'Mbak F'; // Set session
echo "Session user: " . $_SESSION['user'] . "<br>";

// Cookie
setcookie("username", "Taufiq", time() + 3600); // Berlaku 1 jam

if (isset($_COOKIE['username'])) {
    echo "Cookie username: " . $_COOKIE['username'] . "<br>";
}
?>
