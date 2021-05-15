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
                                <hr id="Indicator" class="">
                            </div>
                            <form id="Login">
                                <input type="text" placeholder="Username" class="login1">
                                <input type="password" placeholder="Password" class="login1">
                                <button type="submit" class="btn-login1">Login</button>
                            </form>
                            <form id="Register">
                                <input type="text" placeholder="Username">
                                <input type="email" placeholder="Email">
                                <input type="password" placeholder="Password">
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