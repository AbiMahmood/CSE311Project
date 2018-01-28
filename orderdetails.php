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
<?php
 $login = Session::get("cuslogin");
 if ($login == false) {
    header("Location:login.php");
 }
?>
<div class="main">
    <div class="content">
    <div class="section group">
    <div class="order">
    	<h2>Your Order Details</h2>
        <table class="tblone">
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            <?php
                            $cmrId = Session::get("cmrId");
                            $getorder = $ct->getOrderProduct($cmrId);
                            if ($getorder) {
                                $i =0;
                                while ($result = $getorder->fetch_assoc()) {
                                    $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['productName'];?></td>
                                <td><img src="admin/<?php echo $result['image'];?>" alt=""/></td>
                                <td><?php echo $result['quantity'];?></td>
                                
                                <td>BDT/<?php
                                $total = $result['price'] *  $result['quantity'];
                                echo $total;?></td>
                                
                            </tr>
                        <?php } } ?>
                        </table>
    </div>
    </div>
    <div class="clear"></div>
    </div>
    </div>
   <?php
include 'inc/footer.php';
?>