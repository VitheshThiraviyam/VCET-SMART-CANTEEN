<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $checkroll_no = $_POST['sroll'];
    $rt = "select * from `signup` where roll_no = '$checkroll_no'";
    $check = mysqli_query($con,$rt);
    if(mysqli_num_rows($check)>0)
    {
       $row = mysqli_fetch_assoc($check);
       if($row)
       {
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['roll_no'] = $row['roll_no'];
        echo "<script>window.location = 'Shome.php';</script>";
       }
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
    <link
        href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1>VCET SMART CANTEEN</h1>
        <span class="logo"><img src="logo.jpg"></span>

    </div>
    <div class="container">
        <form class="form" action="Slogin.php" method="post">
            <h2>Student Login</h2>
            <label>Enter your Rollno</label>
            <input type="text" name="sroll">
            <label>Enter your password</label>
            <input type="text" name="spass">
            <button type="submit" name="submit">Login</button>
            <p>Are you are a new user ?</p>
            <a href="Sregister.php">Sign Up</a>
        </form>
    </div>
</body>

</html>