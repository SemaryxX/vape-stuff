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
    <title>Vape-Stuff | Contact Us</title>
    <style>
        body {
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 2px;
            width: 60%;
        }
    </style>
    <link rel="icon" href="img/SemaryDev2.ico" />
    <title>SemaryDev</title>
</head>

<body>
    <div class="container">
        <?php require_once "includes/template/header.php"; ?>
        <div class="contact-us">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img src="img/ContactPage.svg" class="contactSVG" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="contact-info">
                        <div class="titley">Contact Us</div>
                        <ul class="contact-methods">
                            <li><i class="fa fa-phone"></i> (+02)01027012337</li>
                            <li><i class="fa fa-envelope"></i> lesemary123@gmail.com</li>
                            <li><i class="fa fa-globe"></i> www.semarydev.com</li>
                        </ul>
                        <ul class="contact-social">
                            <li><a href="https://www.facebook.com/semary.l" target="_blank"><i
                                        class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://wa.me/01027012337" target="_blank"><i class="fab fa-whatsapp-square"
                                        style="color: #03f97e"></i></a></li>
                            <li><a href="https://www.behance.net/lesemary" target="_blank"><i
                                        class="fab fa-behance-square" style="color: #3e3eff"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/lesemary/" target="_blank"><i
                                        class="fab fa-linkedin" style="color: #0284db"></i></a></li>
                        </ul>
                        <div class="contact-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><b>Full Name</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter your full name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><b>Email</b></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                        with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><b>Subject</b></label>
                                    <input type="text" class="form-control" placeholder="Enter the subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><b>Message</b></label>
                                    <textarea class="form-control" placeholder="Type your message..."
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "includes/template/footer.php"; ?>
    </div>

</body>
</html>