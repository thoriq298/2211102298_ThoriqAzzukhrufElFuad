<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Umur</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f2f5; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            padding-top: 50px;
        }
        .form-box {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background:rgb(127, 76, 175);
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background:rgb(130, 69, 160);
        }
        h2, h3 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Cek Umur</h2>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" required>
        Umur: <input type="number" name="umur" required>
        <input type="submit" value="Cek Status">
    </form>

    <?php
    if (isset($_POST['nama']) && isset($_POST['umur'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = (int) $_POST['umur'];

        echo "<h3>Halo, $nama!</h3>";
        echo ($umur >= 18) ? "<p>Status: <strong>Dewasa</strong></p>" : "<p>Status: <strong>Belum Dewasa</strong></p>";
    }
    ?>
</div>

</body>
</html>
