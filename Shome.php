<?php
include 'database.php';
session_start();
$n = $_SESSION['name'];
$roll = $_SESSION['roll_no'];
$check_existing = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
$result = mysqli_query($con, $check_existing);
if (mysqli_num_rows($result) == 0) { // Only insert if roll_no doesn't exist
    $roll_query = "INSERT INTO `cart` (`roll_no`) VALUES ('$roll')";
    mysqli_query($con, $roll_query);
}

/*if (isset($_POST['Cartadd'])) {
    $value = $_POST['vmvalue'];

    // Check if the roll_no exists in the cart
    $checkcart = "SELECT vmqty FROM `cart` WHERE roll_no = '$roll'";
    $concart = mysqli_query($con, $checkcart);
    $vmcheck = mysqli_fetch_assoc($concart);

    if (!$vmcheck) { // If no record exists, insert new row
        $vmquery = "INSERT INTO `cart` (`vmqty`, `roll_no`) VALUES ('$value', '$roll')";
        $run = mysqli_query($con, $vmquery);
        
        if ($run) {
            echo "Items added to cart successfully";
        } else {
            echo "Error adding items: " . mysqli_error($con);
        }
    } else { // If record exists, update the quantity
        $updateQuery = "UPDATE `cart` SET `vmqty` = '$value' WHERE roll_no = '$roll'";
        $run = mysqli_query($con, $updateQuery);

        if ($run) {
            echo "Items updated successfully";
        } else {
            echo "Error updating items: " . mysqli_error($con);
        }
    }
}
*/
if (isset($_POST['vbCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['vbvalue']);
    $vbvalue = "UPDATE `cart` SET `vbqty` = '$value' WHERE roll_no = '$roll'";
    
    if (mysqli_query($con, $vbvalue)) {
        echo "Item added to cart successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<script>
    /*document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".meal, .vegbiriyani").forEach((item) => {
            const plusBtn = item.querySelector(".buttons button:last-child");
            const minusBtn = item.querySelector(".buttons button:first-child");
            const qtySpan = item.querySelector("p span");
            const qtyInput = item.querySelector("input[name='vmvalue']");

            let qty = 0;

            plusBtn.addEventListener("click", function () {
                qty++;
                qtySpan.textContent = qty;
                qtyInput.value = qty;
            });

            minusBtn.addEventListener("click", function () {
                if (qty > 0) {
                    qty--;
                    qtySpan.textContent = qty;
                    qtyInput.value = qty;
                }
            });
        });
    });*/
document.addEventListener("DOMContentLoaded", function () {
    let vbContainer = document.getElementsByClassName("vegbiriyani")[0]; // Get the first Veg Biryani container

    let plusButton = vbContainer.getElementsByClassName("plus")[0]; // Plus button inside the container
    let minusButton = vbContainer.getElementsByClassName("minus")[0]; // Minus button inside the container
    let quantityDisplay = vbContainer.getElementsByClassName("vbquantity")[0]; // Quantity display inside the container
    let quantityInput = vbContainer.getElementsByClassName("vmvalue")[0]; // Hidden input inside the container

    let qty = 0; // Initial quantity

    plusButton.addEventListener("click", function (event) {
        event.preventDefault(); 
        qty++;
        updateQuantity(qty);
    });

    minusButton.addEventListener("click", function (event) {
        event.preventDefault();
        if (qty > 0) {
            qty--;
            updateQuantity(qty);
        }
    });

    function updateQuantity(value) {
        quantityDisplay.textContent = value;
        quantityInput.value = value;
    }
});
    document.addEventListener("DOMContentLoaded", function () {
        function getTimeOfDay() {
            const hours = new Date().getHours();

            if (hours >= 5 && hours < 12) {
                return "Good Morning!";
            } else if (hours >= 12 && hours < 17) {
                return "Good Afternoon!";
            } else if (hours >= 17 && hours < 21) {
                return "Good Evening!";
            } else {
                return "Good Night!";
            }
        }

        function updateGreeting() {
            document.getElementById("greeting").innerText = getTimeOfDay();
        }

        updateGreeting();
        setInterval(updateGreeting, 60000);
    });
   

</script>

<body>

    <div class="header">
        <h1>VCET SMART CANTEEN</h1>
        <span class="logo"><img src="logo.jpg"></span>

    </div>
    <div class="carts">
        <div class="title">
            <h1 id="greeting" class="greet"></h1>
            <h2>Welcome, <?php echo "$n"; ?>!</h2>
        </div>
        <div class="cart">
            <a href="Cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </div>
    <div class="sectiont">
        <h2>Main Course</h2>
    </div>
    <!---vegmeal--->
    <div class="section1">
        <div class="meal">
            <p>Veg Meals</p>
            <p>Available Qty:
                <?php
                $vq = "select vegmeal from `items` where id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['vegmeal'];
                    if ($rowv == 0) {
                        echo "OUT OF STOCK";
                    } else {
                        echo "$rowv";
                    }
                }
                ?>
            </p>
            <img src="meal.jpg">
            <div class="buttons">
                <button>-</button>
                <p>Price : 80rs</p>
                <button onclick="addvegmeal()">+</button>
            </div>
            <form action="Shome.php" method="post">
                <p>Qty : <span id="qtvm">0</span></p>
                <input type="hidden" name="vmvalue" id="vmvalue" value="0">
                <button type="submit" name="Cartadd" class="Cartadd">Add to Cart</button>
            </form>

        </div>
        <!----vegbiriyani--->
        <div class="vegbiriyani">
            <p>Veg Biriyani</p>
            <p>Available Qty:
                <?php
                $vq = "SELECT vegbiriyani FROM `items` WHERE id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['vegbiriyani'];
                    echo $rowv == 0 ? "OUT OF STOCK" : $rowv;
                }
                ?>
            </p>
            <img src="vegbiriyani.jpg">

            <div class="vbbuttons">
                <button class="minus" onclick="decreaseVB(event)">-</button>
                <p>Price: 60rs</p>
                <button class="plus" onclick="increaseVB(event)">+</button>
            </div>

            <form action="Shome.php" method="post">
                <p>Qty: <span class="vbquantity">0</span></p>
                <input type="hidden" name="vbvalue" class="vmvalue" value="16">
                <button type="submit" name="vbCartadd" class="Cartadd">Add to Cart</button>
            </form>
        </div>
        <!-- Veg Fried Rice -->
        <div class="vegbiriyani">
            <p>Veg Fried Rice</p>
            <p>Available Qty:
                <?php
                $vq = "SELECT vegfriedrice FROM `items` WHERE id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['vegfriedrice'];
                    echo ($rowv == 0) ? "OUT OF STOCK" : "$rowv";
                }
                ?>
            </p>
            <img src="vegrice.jpg">
            <div class="vfrbuttons">
                <button class="minus">-</button>
                <p>Price: 80rs</p>
                <button class="plus">+</button>
            </div>
            <p>Qty: <span class="qty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="vmvalue" class="qty-input" value="0">
                <button type="submit" name="Cartadd" class="Cartadd">Add to Cart</button>
            </form>
        </div>
        <!-- Egg Fried Rice -->
        <div class="vegbiriyani">
            <p>Egg Fried Rice</p>
            <p>Available Qty:
                <?php
                $vq = "SELECT eggfriedrice FROM `items` WHERE id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['eggfriedrice'];
                    echo ($rowv == 0) ? "OUT OF STOCK" : "$rowv";
                }
                ?>
            </p>
            <img src="eggrice.jpg">
            <div class="efrbuttons">
                <button class="minus">-</button>
                <p>Price: 100rs</p>
                <button class="plus">+</button>
            </div>
            <p>Qty: <span class="qty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="eggvalue" class="qty-input" value="0">
                <button type="submit" name="Cartadd" class="Cartadd">Add to Cart</button>
            </form>
        </div>
    </div>
    <div class="snacks">
        <h2>Snacks</h2>
    </div>
    <!---Eggpuffs--->
    <div class="section1">
        <div class="meal">
            <p>Egg Puffs</p>
            <p>Available Qty:
                <?php
                $vq = "select eggpuff from `items` where id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['eggpuff'];
                    if ($rowv == 0) {
                        echo "OUT OF STOCK";
                    } else {
                        echo "$rowv";
                    }
                }
                ?>
            </p>
            <img src="eggpuff.jpg">
            <div class="epbuttons">
                <button class="minus">-</button>
                <p>Price : 15rs</p>
                <button class="plus">+</button>
            </div>
            <p>Qty: <span class="qty">0</span></p>
            <button class="Cartadd">Add to Cart</button>
        </div>
        <!--vegpuffs-->
        <div class="vegbiriyani">
            <p>Veg Puffs</p>
            <p>Available Qty:
                <?php
                $vq = "select vegpuff from `items` where id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['vegpuff'];
                    if ($rowv == 0) {
                        echo "OUT OF STOCK";
                    } else {
                        echo "$rowv";
                    }
                }
                ?>
            </p>
            <img src="vegpuff.jpg">
            <div class="vpbuttons">
                <button class="minus">-</button>
                <p>Price : 15rs</p>
                <button class="plus">+</button>
            </div>
            <p>Qty: <span class="qty">0</span></p>
            <button class="Cartadd">Add to Cart</button>
        </div>
        <!---Samosa--->
        <div class="vegbiriyani">
            <p>Samosa</p>
            <p>Available Qty:
                <?php
                $vq = "select samosa from `items` where id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['samosa'];
                    if ($rowv == 0) {
                        echo "OUT OF STOCK";
                    } else {
                        echo "$rowv";
                    }
                }
                ?>
            </p>
            <img src="samosa.webp">
            <div class="sbuttons">
                <button class="minus">-</button>
                <p>Price : 10rs</p>
                <button class="plus">+</button>
            </div>
            <p>Qty: <span class="qty">0</span></p>
            <button class="Cartadd">Add to Cart</button>
        </div>
        <!---creambun--->
        <div class="vegbiriyani">
            <p>Cream Bun</p>
            <p>Available Qty:
                <?php
                $vq = "select creambun from `items` where id = 1";
                $ov = mysqli_query($con, $vq);
                if ($ov) {
                    $vrowa = mysqli_fetch_array($ov);
                    $rowv = $vrowa['creambun'];
                    if ($rowv == 0) {
                        echo "OUT OF STOCK";
                    } else {
                        echo "$rowv";
                    }
                }
                ?>
            </p>
            <img src="creambun.jpg">
            <div class="cbbuttons">
                <button class="minus">-</button>
                <p>Price : 15rs</p>
                <button class="plus">+</button>
            </div>
            <p>Qty: <span class="qty">0</span></p>
            <button class="Cartadd">Add to Cart</button>
        </div>
    </div>
</body>

</html>