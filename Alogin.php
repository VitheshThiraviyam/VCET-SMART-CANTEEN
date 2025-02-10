<?php
include 'database.php';
if(isset($_POST['asubmit']))
{
    $aemp = $_POST['aempno'];
    $apass = $_POST['apass'];
    $ota = "select * from `admintable` where emp_id = '$aemp'";
    $acheck = mysqli_query($con,$ota);
    if(mysqli_num_rows($acheck)>0)
    {
        $arow = mysqli_fetch_assoc($acheck);
        if($acheck)
        {
            $auser = $arow['name'];
        }
        session_start();
        $_SESSION['auser'] = $auser;
        echo "<script>window.location = 'Ahome.php';</script>";
    }
}
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
    <link href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>VCET SMART CANTEEN</h1>
        <span class="logo"><img src="logo.jpg"></span>
    </div>
    <div class="container">
        <form class="form" action="Alogin.php" method="post" autocomplete="off">
            <h2>Login</h2>
            <label>Enter your employee id</label>
            <input type="text" name="aempno" autocomplete="off" required>
            <label>Set a Password</label>
            <input type="text" name="apass" autocomplete="off" required>

            <button type="submit" name="asubmit">Sign Up</button>
            <p>Are you are a new admin ?</p>
            <a href="Aregister.php">Sign Up</a>
        </form>
    </div>
</body>
</html>