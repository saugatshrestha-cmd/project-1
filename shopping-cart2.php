<html>
    <?php
    session_start();
        include("handler/customersession.php");
        include("partials/connect.php");
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
                if(isset($_SESSION['cart'])){
                    $total=0;
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
                </tr>
            </table>
        </div>
        <form action="handler/orderhandler.php" method="POST">
        <div class="shipping">
            <table>
            <tr>
                <td class="ship">Shipping:</td>
            </tr>
                <tr>
				    <td>
					    Address:
                        <input class="address" type="text" name="address" placeholder="Address">
				    </td>
                </tr>
                <tr>
				    <td>
					    Phone number:
                        <input class="zipcode" type="text" name="phone" placeholder="Phone number">
                    </td>
				</tr>
                <tr>
				<td>
					Payment method:<select class="select" name="payment">
						<option name="cash">Cash on delievery</option>
						<option name="esewa">esewa</option>
					</select>
                </td>
                </tr>
                <tr>
                <td><input type="hidden" name="total" value="<?php echo $total?>"></td>
                </tr>
               <tr>
                   <td><button name="placeorder">Place Order</button></td></tr>
            </table>
        </div>
        </form>
    </div>
</main>
    <?php
        include("partials/footer.php");
    ?>
</body>
</html>