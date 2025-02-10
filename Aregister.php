<?php
session_start();
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aname = trim($_POST['aname']);
    $aempno = trim($_POST['aempno']);
    $apassword = trim($_POST['apass']);

    $aname = mysqli_real_escape_string($con, $aname);
    $aempno = mysqli_real_escape_string($con, $aempno);
    $apassword = mysqli_real_escape_string($con, $apassword);

    $check_query = "SELECT * FROM `admintable` WHERE emp_id = '$aempno'";
    $op = mysqli_query($con, $check_query);

    if (mysqli_num_rows($op) > 0) {
        $_SESSION['message'] = "User Account Already Exists! ";
        $_SESSION['msg_type'] = "error";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sapi = "INSERT INTO `admintable` (emp_id, name, password) VALUES ('$aempno', '$aname', '$apassword')";
        $ot = mysqli_query($con, $sapi);

        if ($ot) {
            $_SESSION['message'] = "Successfully Registered! Login to Continue";
            $_SESSION['msg_type'] = "success";
        } else {
            $_SESSION['message'] = "Registration Failed!";
            $_SESSION['msg_type'] = "error";
        }
    }

    header("Location: Aregister.php");
    exit();
}
$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
$msg_type = isset($_SESSION['msg_type']) ? $_SESSION['msg_type'] : "";

unset($_SESSION['message']);
unset($_SESSION['msg_type'])
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCET-SMART-CANTEEN</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
        .message {
            font-size: 18px;
            padding: 10px;
            margin-top: 10px;
            width: 50%;
            text-align: center;
            display: flex;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            border-radius: 8px;
        }

        .success {
            color: green;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .error {
            color: red;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }

        .success {
            color: green;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .error {
            color: red;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>VCET SMART CANTEEN</h1>
        <span class="logo"><img src="logo.jpg"></span>
    </div>
    <div class="container">
        <form class="form" action="Aregister.php" method="post" autocomplete="off">
            <h2>Sign Up</h2>
            <label>Enter your Name</label>
            <input type="text" name="aname" autocomplete="off" required>

            <label>Enter your employee id</label>
            <input type="text" name="aempno" autocomplete="off" required>

            <label>Set a Password</label>
            <input type="text" name="apass" autocomplete="off" required>

            <button type="submit">Sign Up</button>
            <p>Are you are an existing admin ?</p>
            <a href="Alogin.php">Login</a>
        </form>
    </div>
    <?php if (!empty($message)): ?>
        <div class="message <?= $msg_type; ?>">
            <?= $message; ?>
        </div>
    <?php endif; ?>
</body>

</html>