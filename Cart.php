<?php
include 'database.php';
session_start();
$roll = $_SESSION['roll_no'];
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
        <table>
            <tr>
                <?php
                $cartquery = "select * from `cart` where roll_no = '$roll'";
                $ots = mysqli_query($con,$cartquery);
                if(mysqli_num_rows($ots))
                {
                    $rows = mysqli_fetch_assoc($ots);
                    $carts = $rows['vmqty'];
                    echo "$carts";
                }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>