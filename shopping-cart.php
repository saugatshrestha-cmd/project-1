<html>
    <head>
    <?php
        include("partials/head.php");
    ?>
    </head>
<body>
    <?php
        include("partials/header.php");
    ?>
<main>
    <div class="shopping-container">
        <h1>Shopping Cart</h1>
        <div class="shopping-cart">
            <div class="shopping-products">
                <div class="shopping-product">
                    <img src="assets/1.png">
                    <div class="shopping-product-info">
                        <h3 class="shopping-product-name">New Shoes</h3>
                        <h4 class="shopping-product-price">Rs 1,000</h4>
                        <p class="shopping-product-quantity">Quantity: <input type="number" value="1">
                        <p class="shopping-product-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <span class="shopping-remove">Remove</span>
                        </p>
                    </div>
                </div>
                <div class="shopping-product">
                    <img src="assets/1.png">
                    <div class="shopping-product-info">
                        <h3 class="shopping-product-name">New Shoes</h3>
                        <h4 class="shopping-product-price">Rs 2,000</h4>
                        <p class="shopping-product-quantity">Quantity: <input type="number" value="1">
                        <p class="shopping-product-remove">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            <span class="shopping-remove">Remove</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="shopping-cart-total">
                <p>
                    <span>Total Price</span>
                    <span>Rs 3,000</span>
                </p>
                <p>
                    <span>Number of Items</span>
                    <span>2</span>
                </p>
                <a href="#">Proceed to Checkout</a>
            </div>
        </div>
    </div>    
</main>
<?php
    include("partials/footer.php");
?>
</body>
</html>