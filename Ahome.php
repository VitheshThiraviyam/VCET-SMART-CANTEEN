<?php
session_start();
$an = $_SESSION['auser'];
?>
<?php 
include 'database.php';
//Increase the Quantity
if(isset($_POST['ivegmeal']))
{
    $vmeal = "select vegmeal from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegmeal'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET vegmeal = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['ivegbiriyani']))
{
    $biriyani = "select vegbiriyani from `items` where id = 1";
    $conbiriyani = mysqli_query($con,$biriyani);
    if($conbiriyani)
    {
        $brow = mysqli_fetch_assoc($conbiriyani);
        $bcount = $brow['vegbiriyani'];
        $bnewcount = $bcount + 1;
        $update = mysqli_query($con, "UPDATE `items` SET vegbiriyani = '$bnewcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['ivegrice']))
{
    $vmeal = "select vegfriedrice from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegfriedrice'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET vegfriedrice = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['ieggrice']))
{
    $vmeal = "select eggfriedrice from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['eggfriedrice'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET eggfriedrice = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['ieggpuff']))
{
    $vmeal = "select eggpuff from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['eggpuff'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET eggpuff = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['ivegpuff']))
{
    $vmeal = "select vegpuff from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegpuff'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET vegpuff = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['isamosa']))
{
    $vmeal = "select samosa from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['samosa'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET samosa = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['icreambun']))
{
    $vmeal = "select creambun from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['creambun'];
        $newcount = $count + 1;
        $update = mysqli_query($con, "UPDATE `items` SET creambun = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
//Decrease Quantity
if(isset($_POST['dvegmeal']))
{
    $vmeal = "select vegmeal from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegmeal'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET vegmeal = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['dvegbiriyani']))
{
    $vmeal = "select vegbiriyani from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegbiriyani'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET vegbiriyani = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['dvegrice']))
{
    $vmeal = "select vegfriedrice from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegfriedrice'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET vegfriedrice = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['deggrice']))
{
    $vmeal = "select eggfriedrice from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['eggfriedrice'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET eggfriedrice = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['epuff']))
{
    $vmeal = "select eggpuff from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['egpuff'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET eggpuff = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['vpuff']))
{
    $vmeal = "select vegpuff from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['vegpuff'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET vegpuff = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['dsamosa']))
{
    $vmeal = "select samosa from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['samosa'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET samosa = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
    }
}
if(isset($_POST['dcb']))
{
    $vmeal = "select creambun from `items` where id = 1";
    $conmeal = mysqli_query($con,$vmeal);
    if($conmeal)
    {
        $row = mysqli_fetch_assoc($conmeal);
        $count = $row['creambun'];
        $newcount = $count -1;
        $update = mysqli_query($con, "UPDATE `items` SET creambun = '$newcount' WHERE id = 1");
        header("Location: Ahome.php");
        exit;
        
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
    <div class="title">
        <h2>Welcome, <?php echo "$an"; ?>!</h2>
    </div>
    <div class="sectiont">
        <h2>Main Course</h2>
    </div>
    <div class="section1">
        <div class="meal">
            <p>Veg Meals</p>
            <img src="meal.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="dvegmeal">-</button>
                </form>
                <p>Qty :<?php $veg = "select vegmeal from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['vegmeal'];
                    echo "$vegrow";
                }
                ?>
                </p>
                <form action="Ahome.php" method="post">
                <button type="submit" name="ivegmeal">+</button>
                </form>
            </div>
        </div>
        <div class="vegbiriyani">
            <p>Veg Biriyani</p>
            <img src="vegbiriyani.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="dvegbiriyani">-</button>
                </form>
                <p>Qty :<?php $veg = "select vegbiriyani from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['vegbiriyani'];
                    echo "$vegrow";
                }
                ?> </p>
                <form action="Ahome.php" method="post">
                <button name="ivegbiriyani">+</button>
                </form>
            </div>
        </div>
        <div class="vegbiriyani">
            <p>Veg Fried Rice</p>
            <img src="vegrice.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="dvegrice">-</button>
                </form>
                <p>Qty : <?php $veg = "select vegfriedrice from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['vegfriedrice'];
                    echo "$vegrow";
                }
                ?></p>
                <form action="Ahome.php" method="post">
                <button name="ivegrice">+</button>
                </form>
            </div>
        </div>
        <div class="vegbiriyani">
            <p>Egg Fried Rice</p>
            <img src="vegrice.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="deggrice">-</button>
                </form>
                <p>Qty :<?php $veg = "select eggfriedrice from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['eggfriedrice'];
                    echo "$vegrow";
                }
                ?>
                     </p>
                <form action="Ahome.php" method="post">
                <button name="ieggrice">+</button>
                </form>
            </div>
        </div>
    </div>
    <div class="snacks">
        <h2>Snacks</h2>
    </div>
    <div class="section1">
        <div class="meal">
            <p>Egg Puffs</p>
            <img src="eggpuff.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="epuff">-</button>
                </form>
                <p>Qty :<?php $veg = "select eggpuff from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['eggpuff'];
                    echo "$vegrow";
                }
                ?> </p>
                <form action="Ahome.php" method="post">
                <button name="ieggpuff">+</button>
                </form>
            </div>
        </div>
        <div class="vegbiriyani">
            <p>Veg Puffs</p>
            <img src="vegpuff.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="vpuff">-</button>
                </form>
                <p>Qty : <?php $veg = "select vegpuff from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['vegpuff'];
                    echo "$vegrow";
                }
                ?></p>
                <form action="Ahome.php" method="post">
                <button name="ivegpuff">+</button>
                </form>
            </div>
        </div>
        <div class="vegbiriyani">
            <p>Samosa</p>
            <img src="samosa.webp">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="dsamosa">-</button>
                </form>
                <p>Qty :<?php $veg = "select samosa from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['samosa'];
                    echo "$vegrow";
                }
                ?> </p>
                <form action="Ahome.php" method="post">
                <button name="isamosa">+</button>
                </form>
            </div>
        </div>
        <div class="vegbiriyani">
            <p>Cream Bun</p>
            <img src="creambun.jpg">
            <div class="buttons">
                <form action="Ahome.php" method="post">
                <button name="dcb">-</button>
                </form>
                <p>Qty :<?php $veg = "select creambun from `items`";
                $iveg = mysqli_query($con,$veg);
                if($iveg)
                {
                    $mealrow = mysqli_fetch_assoc($iveg);
                    $vegrow = $mealrow['creambun'];
                    echo "$vegrow";
                }
                ?> </p>
                <form action="Ahome.php" method="post">
                <button name="icreambun">+</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>