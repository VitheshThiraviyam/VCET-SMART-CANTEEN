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
    <button class="menu-btn">☰</button>
    <div class="navbar">
        <div class="items">
            <a href="">Home</a>
            <a href="Slogin.php">Student Login</a>
            <a href="Aregister.php">Admin Login</a>
            <a href="about.php">About Us</a>
        </div>
    </div>
    <div class="main">
        <h2>Today's Special</h2>
        <div class="image">
            <img src="meal.jpg">
        </div>
        <div class="content">
            <p>
            Velammal College of Engineering and Technology (VCET) in Madurai offers a variety of vegetarian options in its canteen. While specific details about a vegetarian meal priced at ₹80 are not available, the canteen provides several affordable and hygienic vegetarian dishes
            </p>
        </div>
    </div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.querySelector(".menu-btn");
    const menuItems = document.querySelector(".items");

    menuBtn.addEventListener("click", function () {
        menuItems.classList.toggle("show");

        // Toggle between ☰ and ✖
        if (menuItems.classList.contains("show")) {
            menuBtn.textContent = "✖";
        } else {
            menuBtn.textContent = "☰";
        }
    });
});

</script>
</html>