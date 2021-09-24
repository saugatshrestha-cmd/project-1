<!DOCTYPE html>
<html>
    <head>
    <?php
    session_start();
        include("partials/head.php");
    ?>
    </head>
    <body>
    <?php
        include("partials/header.php");
    ?>
    <main>
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
                            <button>Add to Cart</button>
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