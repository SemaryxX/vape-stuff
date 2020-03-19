<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Vape-Stuff | Vape ..." />
    <meta property="og:description" content="">
    <meta property="og:image" content="img/">
    <meta property="og:url" content="" />
    <meta property="og:type" content="Vape Stuff" />
    <link rel="stylesheet" href="includes/layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/layout/css/all.css">
    <link rel="stylesheet" href="includes/layout/css/normalize.css">
    <link rel="stylesheet" href="includes/layout/css/style.css">
    <link rel="stylesheet" href="includes/layout/css/aos.css">
    <script src="includes/layout/script/respond.min.js"></script>
    <script src="includes/layout/script/jquery-3.3.1.min.js"></script>
    <script src="includes/layout/script/jquery-ui.min.js"></script>
    <script src="includes/layout/script/typed.min.js"></script>
    <script src="includes/layout/script/bootstrap.min.js"></script>
    <title>Vape-Stuff | Login</title>
</head>
<body>
    <div class="container">
        <?php require_once "includes/template/header.php"; ?>
        <div class="center-content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login-form" method="post">
                <label for="login_username">Enter Your Username / Email Address</label>
                <input type="text" class="form-control" placeholder="Username / Email" name="user_name_login" id="login_username">
                <label for="login_password">Enter Your Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password_login" id="login_password">
                <button class="btn btn-success">Login <i class="fas fa-sign-out-alt"></i></button>
            </form>
        </div>
        <?php require_once "includes/template/footer.php"; ?>
    </div>
</body>

</html>