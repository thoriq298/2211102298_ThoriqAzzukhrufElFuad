<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user_valid = "thoriq jawa";
    $pass_valid = "123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $user_valid && $password == $pass_valid) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #e3f2fd; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            padding-top: 50px;
        }
        .login-box {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background:rgb(114, 33, 243);
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background:rgb(130, 25, 210);
        }
        h2 {
            text-align: center;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="POST" action="">
        Username: <input type="text" name="username" required>
        Password: <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
