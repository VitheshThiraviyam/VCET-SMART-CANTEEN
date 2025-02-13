<?php
include 'database.php';
session_start();
$roll = $_SESSION['roll_no'];
if(isset($_POST['resetcart']))
{
    $querycart = "UPDATE `cart` SET `vbqty` = 0,`vmqty` = 0,`vfrqty` = 0,`efrqty`=0,`epqty`=0,`vpqty`=0,`sqty`=0,`cbqty` = 0 WHERE roll_no = '$roll'";
    $concart = mysqli_query($con,$querycart);
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
        <table class="carttable">
            <tr>
                <th>Items</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Veg Meals</td>
                <td>
                    <?php
                    $total = 0;
                    $cartquery = "select * from `cart` where roll_no = '$roll'";
                    $ots = mysqli_query($con, $cartquery);
                    if (mysqli_num_rows($ots)) {
                        $rows = mysqli_fetch_assoc($ots);
                        $carts = $rows['vmqty'];
                        if ($carts != 0) {
                            echo "$carts";
                            $total = $total + 80 * $carts;
                        }
                    }
                    ?>
                </td>
                <td>
                <?php
                    $total = 0;
                    $cartquery = "select * from `cart` where roll_no = '$roll'";
                    $ots = mysqli_query($con, $cartquery);
                    if (mysqli_num_rows($ots)) {
                        $rows = mysqli_fetch_assoc($ots);
                        $carts = $rows['vmqty'];
                        if ($carts != 0) {
                            $total = 80 * $carts;
                            echo "Rs.$total";
                        }
                    }
                    ?>
                </td>
            </tr>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['vbqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 60;
                    $price = $carts*60;
                    echo "<tr>
                <td>Veg Biriyani</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['vfrqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 80;
                    $price = $carts*80;

                    echo "<tr>
                <td>Veg Fried Rice</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['efrqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 100;
                    $price = $carts*100;

                    echo "<tr>
                <td>Egg Fried Rice</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['epqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 15;
                    $price = $carts*15;

                    echo "<tr>
                <td>Egg Puffs</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['vpqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 15;
                    $price = $carts*15;

                    echo "<tr>
                <td>Veg Puffs</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['sqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 10;
                    $price = $carts*10;

                    echo "<tr>
                <td>Samosa</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <?php
            $cartquery = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
            $ots = mysqli_query($con, $cartquery);

            if (mysqli_num_rows($ots) > 0) {
                $rows = mysqli_fetch_assoc($ots);
                $carts = $rows['cbqty'];

                if ($carts != 0) {
                    $total = $total + $carts * 15;
                    $price = $carts*15;

                    echo "<tr>
                <td>Cream Bun</td>
                <td>$carts</td>
                <td>Rs.$price</td>
              </tr>";
                }
            }
            ?>
            <tr>
                <td>
                    Total
                </td>
                <td>

                </td>
                <td>
                    <?php echo "Rs.$total" ?>
                </td>
            </tr>


        </table>
        <form action="Cart.php" method="post">
        <div class="reset-button">
            <p>Click Here to Reset Cart</p>
            <button name="resetcart">Reset</button>
        </div>
        </form>
</body>

</html>