<?php
session_start();

$message = "";
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'login';

if (isset($_POST['register_action'])) {
    $_SESSION['stored_user'] = $_POST['username'];
    $_SESSION['stored_pass'] = $_POST['password'];
    $message = "user is added"; 
}

if (isset($_POST['login_action'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if (isset($_SESSION['stored_user']) && $user === $_SESSION['stored_user'] && $pass === $_SESSION['stored_pass']) {
        $message = "welcome " . $_SESSION['stored_user']; 
    } else {
        $message = "wrong username/password"; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 8.1 PHP</title>
    <style>
        /* CSS dibikin simpel biar mirip contoh di PDF bray */
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 100px; /* Biar label rapi sejajar bray */
        }
        input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        .link-blue {
            color: #007bff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }
        .result-msg {
            margin-top: 20px;
            font-weight: normal;
        }
    </style>
</head>
<body>

    <?php if ($mode === 'login'): ?>
        <h2>Login</h2>
        <form method="POST" action="LoginRegister.php?mode=login">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <button type="submit" name="login_action" class="btn-green">Login</button>
                <a href="LoginRegister.php?mode=register" class="link-blue">Register</a>
            </div>
        </form>
    <?php else: ?>
        <h2>Register</h2>
        <form method="POST" action="LoginRegister.php?mode=register">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <button type="submit" name="register_action" class="btn-green">Send</button>
            </div>
        </form>
    <?php endif; ?>

    <div class="result-msg">
        <?php 
            echo $message; 
            if ($message === "user is added") {
                echo ' <a href="LoginRegister.php?mode=login" class="link-blue">Login</a>';
            }
        ?>
    </div>

</body>
</html>