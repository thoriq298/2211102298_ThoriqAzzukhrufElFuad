<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f0f0; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            padding-top: 50px;
        }
        .dashboard {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background:rgb(165, 54, 244);
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background:rgb(129, 47, 211);
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Ini adalah halaman dashboard setelah login.</p>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
