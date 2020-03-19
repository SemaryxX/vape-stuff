<?php
    require_once "configs/connect.php";
?>
<header>
    <div class="row">
        <div class="col-9 col-sm-12 col-lg-6 col-xl-6">
            <div class="header-logo">
                <h2>Vape-Stuff</h2>
            </div>
        </div>
        <div class="col-9 col-sm-12 col-lg-6 col-xl-6">
            <div class="header-links">
                <a href="home">Home</a>
                <a href="">Top Products</a>
                <a href="">Top Stores</a>
                <a href="contact-us">Contact-us</a>
                <div class="login-select"><i class="fas fa-sign-out-alt"></i>
                    <span><a href="login">Login</a></span>
                    <span><a href="">Sign up</a></span>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    $(".login-select").click(function(){
        $(".login-select span").toggle(500);
    });
</script>