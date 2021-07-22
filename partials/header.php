<?php
    include("partials/connect.php");
?>
<header>
            <!--Start Navbar-->
            <div class="navbar">
                <a href="home.php" class="logo">
                    Jutta
                </a>
                <div class="navbar-right menu">
                    <a href="home.php">Home</a>
                    <a href="men.php">Men</a>
                    <a href="women.php">Women</a>
                </div>
                <div class="navbar-right">
                    <a href="shopping-cart.php" class="cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">0</span>
                    </a>
                </div>
                <div>
                    <a class="search-box" href="#">
                        <input type="search" placeholder="Search . . ." class="search">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <div>
                    <a href="login.php">
                        <button class="login">Login / Signup</button>
                    </a>
                </div>
            </div>
            <!--End Navbar-->
    </header>