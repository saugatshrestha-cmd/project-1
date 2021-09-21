<?php
    include("connect.php");
    include("head.php");
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
                <?php
                if(!empty($_SESSION['cart'])){
                    $qty=count($_SESSION['cart']);
                
                ?>
                <div class="navbar-right">
                    <a href="shopping-cart.php" class="cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge"><?php echo $qty?></span>
                    </a>
                </div>
                <?php }else{?>
                <div class="navbar-right">
                    <a href="shopping-cart.php" class="cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">0</span>
                    </a>
                </div>
                <?php }?>
                <div>
                    <?php
                    if(!empty($_SESSION['email'])) {?>
                    <a href="handler/customerlogout.php">
                        <button class="logout">Logout</button>
                    </a>
                    <?php }else{?>
                    <a href="login.php">
                        <button class="login">Login</button>
                    </a>
                    <?php }?>
                </div>
            </div>
            <!--End Navbar-->
    </header>