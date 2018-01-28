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
if (isset($_GET['delpro'])) {
	$delId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delpro']);
	$delproduct = $ct->delproductbycart($delId);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$cartId = $_POST['cartId'];
	$quantity = $_POST['quantity'];
	$updateCart = $ct->UpdateCart($cartId, $quantity);
	if ($quantity <= 0) {
		$delproduct = $ct->delproductbycart($cartId);
	}
}
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
			    	<?php
					if (isset($updateCart)) {
						echo $updateCart;
					}
					if (isset($delproduct)) {
						echo $delproduct;
					}
					?>
						<table class="tblone">
							<tr>
								<th width="5%">SL</th>
								<th width="30%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="15%">Total Price</th>
								<th width="10%">Action</th>
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
								<td><img src="admin/<?php echo $result['image'];?>" alt=""/></td>
								<td>BDT<?php echo $result['price'];?></td>
								<td>
									<form action="" method="post">
									<input type="hidden" name="cartId" value="<?php echo $result['cartId'];?>"/>
										<input type="number" name="quantity" value="<?php echo $result['quantity'];?>"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td><?php
								$total = $result['price'] *  $result['quantity'];
								echo $total;?></td>
								<td><a onclick="return confirm('Are You Sure to Delete?')" href="?delpro=<?php echo $result['cartId'];?>">X</a></td>
							</tr>
							<?php $sum = $sum + $total;
							Session::set("sum", $sum);?>
							<?php 	} } ?>
						</table>
						<table style="float:right;text-align:left;" width="40%">
						<?php
			             $getData = $ct->CheckCartTable();
			             if ($getData) {
			             	?>
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
					   </table>
					   <?php } 
					   	?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="category.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<?php
							$getPro = $ct->getCartProduct();
						if ($getPro) {
								$i =0;
								$sum = 0;
								while ($result = $getPro->fetch_assoc()) {
									$i++;
							?>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
						   <?php } } else {
					   	echo "Cart Empty";
					   	}?>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
<?php
    include 'inc/footer.php';
    ?>
