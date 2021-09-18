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
        <div class="account-page">
            <div class="login-container">
                <div class="row-1">
                    <div class="col-1">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            <form action="handler/customerlogin.php" id="Login" method="POST">
                                <input type="email" placeholder="Email" name="email" class="login1">
                                <input type="password" placeholder="Password" name="password" class="login1">
                                <button type="submit" class="btn-login1" name="login">Login</button>
                            </form>
                            <form action="handler/customerregister.php" id="Register" method="POST">
                                <input type="email" placeholder="Email" name="email">
                                <input type="password" placeholder="Password" name="password">
                                <input type="password" placeholder="Password" name="password2">
                                <button type="submit" class="btn">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include("partials/footer.php");
    ?>
    <script src="yo.js"></script>
</body>
</html>