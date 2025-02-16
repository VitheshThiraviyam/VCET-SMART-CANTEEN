<?php
include 'database.php';
session_start();
$n = $_SESSION['name'];
$roll = $_SESSION['roll_no'];
if (!$roll) {
    echo "Please login to access";
}
$check_existing = "SELECT * FROM `cart` WHERE roll_no = '$roll'";
$result = mysqli_query($con, $check_existing);
if (mysqli_num_rows($result) == 0) {
    $roll_query = "INSERT INTO `cart` (`roll_no`) VALUES ('$roll')";
    mysqli_query($con, $roll_query);
}


if (isset($_POST['vbCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['vbvalue']);
    $vbvalue = "UPDATE `cart` SET `vbqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $vbvalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['vmCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['vmvalue']);
    $vmvalue = "UPDATE `cart` SET `vmqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $vmvalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['vfrCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['vfrvalue']);
    $vfrvalue = "UPDATE `cart` SET `vfrqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $vfrvalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['efr-Cartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['efrvalue']);
    $efrvalue = "UPDATE `cart` SET `efrqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $efrvalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['epCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['epvalue']);
    $epvalue = "UPDATE `cart` SET `epqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $epvalue)) {
        echo "Item added to cart successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['vpCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['vpvalue']);
    $vpvalue = "UPDATE `cart` SET `vpqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $vpvalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['sCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['svalue']);
    $svalue = "UPDATE `cart` SET `sqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $svalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['cbCartadd'])) {
    $value = mysqli_real_escape_string($con, $_POST['cbvalue']);
    $cbvalue = "UPDATE `cart` SET `cbqty` = '$value' WHERE roll_no = '$roll'";

    if (mysqli_query($con, $cbvalue)) {
        echo "<h2>Item added to cart successfully!</h2>";
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
<style>
    h2{
        color: white;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let quantity = 0;
        const qtyDisplay = document.querySelector(".vmqty");
        const hiddenInput = document.querySelector(".vm-input");
        const plusButton = document.querySelector(".vmplus");
        const minusButton = document.querySelector(".vmminus");

        plusButton.addEventListener("click", function () {
            quantity++;
            updateQuantity();
        });

        minusButton.addEventListener("click", function () {
            if (quantity > 0) {
                quantity--;
                updateQuantity();
            }
        });

        function updateQuantity() {
            qtyDisplay.textContent = quantity;
            hiddenInput.value = quantity;
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        let vbContainer = document.getElementsByClassName("vegbiriyani")[0];

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
        document.querySelectorAll(".vfrbuttons").forEach((container) => {
            let minusBtn = container.querySelector(".vfrminus");
            let plusBtn = container.querySelector(".vfrplus");
            let qtyDisplay = container.parentElement.querySelector(".vfrqty");
            let hiddenInput = container.parentElement.querySelector(".vfr-input");

            let quantity = 0; // Default quantity

            // Increase quantity
            plusBtn.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent page reload
                quantity++;
                qtyDisplay.textContent = quantity;
                hiddenInput.value = quantity; // Update hidden input
            });

            // Decrease quantity (minimum 0)
            minusBtn.addEventListener("click", function (event) {
                event.preventDefault();
                if (quantity > 0) {
                    quantity--;
                    qtyDisplay.textContent = quantity;
                    hiddenInput.value = quantity;
                }
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".efrbuttons").forEach((container) => {
            let minusBtn = container.querySelector(".efrminus");
            let plusBtn = container.querySelector(".efrplus");
            let qtyDisplay = container.parentElement.querySelector(".efrqty");
            let hiddenInput = container.parentElement.querySelector(".efr-input");

            let quantity = 0; // Default quantity

            // Increase quantity
            plusBtn.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent page reload
                quantity++;
                qtyDisplay.textContent = quantity;
                hiddenInput.value = quantity; // Update hidden input
            });

            // Decrease quantity (minimum 0)
            minusBtn.addEventListener("click", function (event) {
                event.preventDefault();
                if (quantity > 0) {
                    quantity--;
                    qtyDisplay.textContent = quantity;
                    hiddenInput.value = quantity;
                }
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        let minusBtn = document.querySelector(".epminus");
        let plusBtn = document.querySelector(".epplus");
        let qtyDisplay = document.querySelector(".epqty");
        let hiddenInput = document.querySelector(".ep-input");

        let quantity = 0; // Initial quantity

        // Increase quantity
        plusBtn.addEventListener("click", function () {
            quantity++;
            qtyDisplay.textContent = quantity;
            hiddenInput.value = quantity; // Update hidden input
        });

        // Decrease quantity (minimum 0)
        minusBtn.addEventListener("click", function () {
            if (quantity > 0) {
                quantity--;
                qtyDisplay.textContent = quantity;
                hiddenInput.value = quantity;
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        let minusBtn = document.querySelector(".vpminus");
        let plusBtn = document.querySelector(".vpplus");
        let qtyDisplay = document.querySelector(".vpqty");
        let hiddenInput = document.querySelector(".vp-input");

        let quantity = 0; // Initial quantity

        // Increase quantity
        plusBtn.addEventListener("click", function () {
            quantity++;
            qtyDisplay.textContent = quantity;
            hiddenInput.value = quantity; // Update hidden input
        });

        // Decrease quantity (minimum 0)
        minusBtn.addEventListener("click", function () {
            if (quantity > 0) {
                quantity--;
                qtyDisplay.textContent = quantity;
                hiddenInput.value = quantity;
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        let minusBtn = document.querySelector(".sminus");
        let plusBtn = document.querySelector(".splus");
        let qtyDisplay = document.querySelector(".sqty");
        let hiddenInput = document.querySelector(".s-input");

        let quantity = 0; // Initial quantity

        // Increase quantity
        plusBtn.addEventListener("click", function () {
            quantity++;
            qtyDisplay.textContent = quantity;
            hiddenInput.value = quantity; // Update hidden input
        });

        // Decrease quantity (minimum 0)
        minusBtn.addEventListener("click", function () {
            if (quantity > 0) {
                quantity--;
                qtyDisplay.textContent = quantity;
                hiddenInput.value = quantity;
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        let minusBtn = document.querySelector(".cbminus");
        let plusBtn = document.querySelector(".cbplus");
        let qtyDisplay = document.querySelector(".cbqty");  // Fixed class name
        let hiddenInput = document.querySelector(".cb-input");

        let quantity = 0; // Initial quantity

        // Increase quantity
        plusBtn.addEventListener("click", function () {
            quantity++;
            qtyDisplay.textContent = quantity;
            hiddenInput.value = quantity; // Update hidden input
        });

        // Decrease quantity (minimum 0)
        minusBtn.addEventListener("click", function () {
            if (quantity > 0) {
                quantity--;
                qtyDisplay.textContent = quantity;
                hiddenInput.value = quantity;
            }
        });
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
            <div class="vmbuttons">
                <button class="vmminus">-</button>
                <p>Price: 80rs</p>
                <button class="vmplus">+</button>
            </div>
            <p>Qty: <span class="vmqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="vmvalue" class="vm-input" value="0">
                <button type="submit" name="vmCartadd" class="Cartadd">Add to Cart</button>
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
                <input type="hidden" name="vbvalue" class="vmvalue" value="0">
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
                <button class="vfrminus">-</button>
                <p>Price: 80rs</p>
                <button class="vfrplus">+</button>
            </div>
            <p>Qty: <span class="vfrqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="vfrvalue" class="vfr-input" value="0">
                <button type="submit" name="vfrCartadd" class="Cartadd">Add to Cart</button>
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
                <button type="button" class="efrminus">-</button>
                <p>Price: 100rs</p>
                <button type="button" class="efrplus">+</button>
            </div>
            <p>Qty: <span class="efrqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="efrvalue" class="efr-input" value="0">
                <button type="submit" name="efr-Cartadd" class="Cartadd">Add to Cart</button>
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
                <button class="epminus">-</button>
                <p>Price : 15rs</p>
                <button class="epplus">+</button>
            </div>
            <p>Qty: <span class="epqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="epvalue" class="ep-input" value="0">
                <button type="submit" class="Cartadd" name="epCartadd">Add to Cart</button>
            </form>
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
                <button class="vpminus">-</button>
                <p>Price : 15rs</p>
                <button class="vpplus">+</button>
            </div>
            <p>Qty: <span class="vpqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="vpvalue" class="vp-input" value="0">
                <button type="submit" class="Cartadd" name="vpCartadd">Add to Cart</button>
            </form>
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
                <button type="button" class="sminus">-</button>
                <p>Price : 10rs</p>
                <button type="button" class="splus">+</button>
            </div>
            <p>Qty: <span class="sqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="svalue" class="s-input" value="0">
                <button type="submit" class="Cartadd" name="sCartadd">Add to Cart</button>
            </form>
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
                <button type="button" class="cbminus">-</button>
                <p>Price : 15rs</p>
                <button type="button" class="cbplus">+</button>
            </div>
            <p>Qty: <span class="cbqty">0</span></p>
            <form action="Shome.php" method="post">
                <input type="hidden" name="cbvalue" class="cb-input" value="0">
                <button type="submit" class="Cartadd" name="cbCartadd">Add to Cart</button>
            </form>
        </div>
    </div>
</body>

</html>