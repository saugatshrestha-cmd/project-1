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
                    <div class="product-info">
                        <div class="product-name">
                            <h1>Nike</h1>
                        </div>
                        <div class="product-price">
                            <span>Rs 2300</span>
                        </div>
                        <div class="product-size">
                            <h2>Size</h2>
                            <div class="size-wrapper">
                                <div>6</div>
                                <div>7</div>
                                <div class="active">8</div>
                                <div>9</div>
                                <div>10</div>
                            </div>
                        </div>
                        <div>
                            <button class="addto" name="addtocart" onclick="location.href='carthandler.php?cart_id=<?php echo $final['id']?> &cart_name=<?php echo $final['name']?> &cart_price=<?php echo $final['price']?> '">Add to Cart</button>
                        </div>
                    </div>
                    <div class="product-img">
                        <div class="img-wrapper">
                            <div class="bounce">
                                <img src="assets/1.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="title">Products</h1>
            <h1 class="title">Men</h1>
        <section class="cards">
        <?php
            include("partials/connect.php");
            $sql="Select * from products";
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
                        <div class="size">
                            <h4>Size:</h4>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                        </div>
                        <div class="btn">
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </section>
        <h1 class="title">Women</h1>
        <section class="cards">
            <div class="container">
                <div class="card">
                    <div class="card_image">
                        <img class="image" src="assets/1.png">
                    </div>
                    <div class="content">
                        <h2>Nike </h2>
                        <div class="price">
                            <h4>Price: Rs2300</h4>
                        </div>
                        <div class="size">
                            <h4>Size:</h4>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                        </div>
                        <div class="btn">
                        <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card_image">
                        <img class="image" src="assets/2.png">
                    </div>
                    <div class="content">
                        <h2>Nike </h2>
                        <div class="price">
                            <h4>Price: Rs2300</h4>
                        </div>
                        <div class="size">
                            <h4>Size:</h4>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                        </div>
                        <div class="btn">
                        <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card_image">
                        <img class="image" src="assets/3.png">
                    </div>
                    <div class="content">
                        <h2>Nike </h2>
                        <div class="price">
                            <h4>Price: Rs2300</h4>
                        </div>
                        <div class="size">
                            <h4>Size:</h4>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                        </div>
                        <div class="btn">
                        <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card_image">
                        <img class="image" src="assets/4.png">
                    </div>
                    <div class="content">
                        <h2>Nike </h2>
                        <div class="price">
                            <h4>Price: Rs2300</h4>
                        </div>
                        <div class="size">
                            <h4>Size:</h4>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                        </div>
                        <div class="btn">
                        <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
        <?php
        include("partials/footer.php");
        ?>
    </body>
</html>