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
<?php
if (isset($_GET['orderid']) && $_GET['orderid'] == 'order') {
  $cmrId = Session::get("cmrId");
  $insertOrder = $ct->orderProduct($cmrId);
  $delData = $ct->delCustomerCart();
  header("Location:Success.php");
}
?>
<style>
  .division{width: 50%; float:left;}
</style>
<div class="main">
 <div class="row">
  <div class="col-lg-10" style="padding: 10%">
   <div class="back">
  <a class="btn btn-primary" role="button" href="cart.php">Privious</a>
    </div>
    <div class="clear"></div>
   <div class="thumbnail">
   <div class="divison">
                <table class="tblone">
              <tr>
                <th>No</th>
                <th>Cake</th>
                <th>Price</th>
                <th>Quantity</th>
                <th >Total Price</th>
              </tr>
              <?php
              $getPro = $ct->getCartProduct();
              if ($getPro) {
                $i =0;
                $sum = 0;
                while ($result = $getPro->fetch_assoc()) {
                  $i++;
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result['productName'];?></td>
                <td>BDT<?php echo $result['price'];?></td>
                <td><?php echo $result['quantity'];?></td>
                <td>TK. <?php
                $total = $result['price'] *  $result['quantity'];
                echo $total;?></td>
                
              </tr>
              <?php $sum = $sum + $total;?>
              <?php   } } ?>
            </table>
            <table style="float:right;text-align:left;" width="40%">
            
              <tr>
                <th>Sub Total : </th>
                <td>TK.<?php $vat = $sum * 0.1; echo $sum;?></td>
              </tr>
              <tr>
                <th>VAT : 10%</th>
                <td>TK. <?php echo $vat;?></td>
              </tr>
              <tr>
                <th>Grand Total :</th>
                <td>TK.<?php $gdtotal = $vat + $sum; echo $gdtotal;?> </td>
              </tr>
              <tr>
                <th></th>

                <td>
                <a class="btn btn-primary" role="button" href="?orderid=order">Confirm Order</a>
                </td>
             id </tr>
             </table>

   </div>
  
    </div>
   </div>
    </div>
    </div>

   <?php
include 'inc/footer.php';
?>