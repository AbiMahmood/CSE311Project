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
<div class="main">
 <div class="row">
  <div class="col-lg-10" style="padding: 10%">
 <h6 style="color:black; font-size: 30px; font:bold;">Personal Information</h6>
 <h3 align="right" "><a href="editprofile.php" style="color:black; font:bold;">Edit Details</a></h3>
  <div class="thumbnail">
<?php
$id = Session::get("cmrId");
$getdata = $cmr->getCustomerData($id);
  if ($getdata) {
    while ($result = $getdata->fetch_assoc()) {
                                 
                    ?>
<table id="customers">
  <tr>
    <td width="20%">Name :</td>
    <td><?php echo $result['name'];?></td>
  </tr>
   <tr>
    <td>Address :</td>
    <td><?php echo $result['address'];?></td>
  </tr>
   <tr>
    <td>City :</td>
    <td><?php echo $result['city'];?></td>
  </tr>
   <tr>
    <td>Country :</td>
    <td><?php echo $result['country'];?></td>
  </tr>
   <tr>
    <td>Zip-Code :</td>
    <td><?php echo $result['zip'];?></td>
  </tr>
   <tr>
    <td>Phone:</td>
    <td><?php echo $result['phone'];?></td>
  </tr>
   <tr>
    <td>Email :</td>
    <td><?php echo $result['email'];?></td>
  </tr>
</table>
<?php } } ?>
</div>
</div>
</div>
</div>

<?php
include 'inc/footer.php';
?>
