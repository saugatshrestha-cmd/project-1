<html>
    <?php
    session_start();
        include("partials/head.php");
    ?>
<body>
    <?php
        include("partials/header.php");
    ?>
<main>
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Update</th>
            </tr>
            <?php
            $total=0;
                if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $value){
                        $total=$total+$value['item_price']*$value['quantity'];
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <div>
                            <p><?php echo $value['item_name']?></p>
                            <small>Rs <?php echo $value['item_price'] ?></small>
                            <form action="cartremove.php" method="POST">
                            <button name="remove">Remove</button>
                            <input type="hidden" name="item_name" value="<?php echo $value['item_name']?>">
                            </form>
                        </div>
                    </div>
                </td>
                <td>Rs<?php echo $value['item_price'] ?></td>
                <td>
                <form action="cartupdate.php" method="POST">
                <input name="quantity" type="number" value="<?php echo $value['quantity']?>"></td>
                    <td><button name="update">Update</button>
                    <input type="hidden" name="item_name" value="<?php echo $value['item_name']?>"></td>
                </form>
            </tr>
            <?php }
                }
            ?>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>Rs <?php echo $total ?></td>
                    <td><button onclick="location.href='shopping-cart2.php'">Proceed to Checkout</button></td>
                </tr>
            </table>
        </div>
    </div>
</main>
    <?php
        include("partials/footer.php");
    ?>
</body>
</html>