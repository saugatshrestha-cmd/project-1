<!DOCTYPE html>
<html>
    <?php
        include("partials/head.php");
    ?>
    <body>
    <?php
        include("partials/header.php");
    ?>
        <main>
             <div class="row">
                <div class="col">
                <?php
            include("partials/connect.php");
            $sql="Select * from products where id = 6";
            $results=$connect->query($sql);
            while($final=$results->fetch_assoc()){    
            ?>
                    <div class="product-info">
                        <div class="product-name">
                            <h1><?php echo $final['name'] ?></h1>
                        </div>
                        <div class="product-price">
                            <span>Rs<?php echo $final['price'] ?></span>
                        </div>
                        <div>
                            <button class="addto"  name="addtocart" onclick="location.href='carthandler.php?cart_id=<?php echo $final['id']?> &cart_name=<?php echo $final['name']?> &cart_price=<?php echo $final['price']?> '">Add to Cart</button>
                        </div>
                    </div>
                    <div class="product-img">
                        <div class="img-wrapper">
                            <div class="bounce">
                                <img src="<?php echo $final['picture'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <h1 class="title">Products</h1>
            <h1 class="title">Men</h1>
        <section class="cards">
        <?php
            include("partials/connect.php");
            $sql="Select * from products where category_id = 1";
            $results=$connect->query($sql);
            while($final=$results->fetch_assoc()){    
        ?>
            <div class="container">
                <div class="card">
                    <div class="card_image">
                        <img class="image" src="<?php echo $final['picture'] ?>">
                    </div>
                    <div class="content">
                        <h2><?php echo $final['name'] ?></h2>
                        <div class="price">
                        <h4>Rs<?php echo $final['price'] ?></h4>
                        </div>
                        <div class="btn">
                            <button name="addtocart" onclick="location.href='carthandler.php?cart_id=<?php echo $final['id']?> &cart_name=<?php echo $final['name']?> &cart_price=<?php echo $final['price']?> '">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </section>
        <h1 class="title">Women</h1>
        <section class="cards">
        <?php
            include("partials/connect.php");
            $sql="Select * from products where category_id = 2";
            $results=$connect->query($sql);
            while($final=$results->fetch_assoc()){    
        ?>
            <div class="container">
                <div class="card">
                    <div class="card_image">
                        <img class="image" src="<?php echo $final['picture'] ?>">
                    </div>
                    <div class="content">
                        <h2><?php echo $final['name'] ?></h2>
                        <div class="price">
                            <h4>Rs<?php echo $final['price'] ?></h4>
                        </div>
                        <div class="btn">
                        <button name="addtocart" onclick="location.href='carthandler.php?cart_id=<?php echo $final['id']?> &cart_name=<?php echo $final['name']?> &cart_price=<?php echo $final['price']?> '">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?> 
        </section>
        </main>
        <?php
        include("partials/footer.php");
        ?>
    </body>
</html>