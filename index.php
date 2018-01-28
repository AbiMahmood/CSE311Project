<?php
    include 'inc/header.php';
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cake shop</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Order.css">
    <link rel="stylesheet" href="assets/css/OrderNow.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/CardPayment.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Cakes.css">
    <link rel="stylesheet" href="assets/css/ContactUs.css">
    <link rel="stylesheet" href="assets/css/Success.css">
    <link rel="stylesheet" href="assets/css/lightbox.css" >
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<div id="promo">
        <div class="jumbotron" id="LearnMoreLayer">
            <h1>Fantastic Offer !</h1>
            <p>We have a great discount to our new customers. Order now and get a big discount on your first cake !</p>
            <p><a class="btn btn-primary" role="button" href="category.php">Learn more</a></p>
        </div>
    </div>
    <div class="container site-section" id="welcome">
        <h1 id="WelcomeHeader">Welcome to Abi's Cake Shop</h1>
        <p>Abi's Cake Shop Bakery was founded in Bangladesh with the mission of great cake of the world. Our dedication and tasty cakes have won us numerous awards.</p>
    </div>
    <div class="container site-section" id="why">
        <h1>Why Choose Us </h1>
        <div class="row" id="WhyChooseUsBackground">
            <div class="col-md-4 item"><i class="fa fa-birthday-cake" id="BdayCakeLogo"></i>
                <h2 id="WhyChooseUsText">Great Taste</h2>
                <p id="GreatTestText">Our cakes are very tasty and yummy. There are many different types of cake recipes and numerous ways of categorizing them. The general classification used is whether or not they contain fat, also known as shortening (not the be confused
                    solely with just processed shortening.</p>
            </div>
            <div class="col-md-4 item"><i class="glyphicon glyphicon-heart" id="HeartLogo"></i>
                <h2>Healthy &amp; Organic</h2>
                <p id="HealthyText">Sugar confectionery includes sweets, candy, candied nuts, chocolates, chewing gum and bubblegum, sweetmeats, pastillage, and other confections that are made primarily of sugar. In some cases, chocolate confections (confections made of
                    chocolate) are treated </p>
            </div>
            <div class="col-md-4 item"><i class="fa fa-shopping-basket" id="BasketLogo"></i>
                <h2>Next Day Dalivery</h2>
                <p id="NextDayText">Confections are defined by the presence of sweeteners. These are usually sugars, but it is possible to buy sugar-free sweets, such as sugar-free peppermints. The most common sweetener for home cooking is </p>
            </div>
        </div>
    </div>
<!-- FlexSlider -->
 <div class="container site-section" id="welcome">
        <h1>Lastest Cakes</h1>
        <div class="row">
        <?php
                        $getPd = $pd->getAllProduct3();
                        if ($getPd) {
                            while ($result = $getPd->fetch_assoc()) {
                                
                    ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="preview.php?proid=<?php echo $result['productId']?>"><img class="img-responsive" src="admin/<?php echo $result['image']?>" id="ChocoStraw" ></a>
                </div>
                <p><?php echo $result['productName'];?> </p>
            </div>
             <?php } } ?>
        </div>
    </div>
  <?php
    include 'inc/footer.php';
    ?>