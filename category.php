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
 <div class="clear"></div>
    <div class="content">
    	<div class="row section group">
	        <div class="col-lg-2 rightsidebar span_3_of_1">
				<h2>CATEGORIES</h2>
				<ul>
				<?php
					$getcat = $cat->getAlLCat();
					if ($getcat) {
						while ($result = $getcat->fetch_assoc()) {
				?>
			      <li><a href="productsbycat.php?catId=<?php echo $result['catId']?>"><?php echo $result['catName']?></a></li>
			      <?php } } ?>
				</ul>    
            </div>
            <div class="col-lg-8">
            	<div class="content">
	    		    <div class="heading">
	    		    <?php echo "        "?>
	    		       <h3>All Cakes</h3>
	    		    </div>
    		        <div class="clear"></div>
	    	    </div>
		        <div class="row section group">
		      		<?php
						$getPd = $pd->getAllProduct2();
						if ($getPd) {
							while ($result = $getPd->fetch_assoc()) {
								
					?>
						<div class="col-lg-3 grid_1_of_4 images_1_of_4 cake_snippet_width">
							 <a href="preview.php?proid=<?php echo $result['productId']?>"><img src="admin/<?php echo $result['image']?>" height="100px" width="100px" alt="" /></a>
							 <h2><?php echo $result['productName'];?> </h2>
							 <p><?php echo $fm->textShorten($result['body'],50);?></p>
							 <p><span class="price"><?php echo $result['price'];?> BDT/-</span></p>
						     <div class="button"><span><a href="preview.php?proid=<?php echo $result['productId']?>" class="details">Details</a></span></div>
						</div>
				    <?php } } ?>
	            </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'inc/footer.php';
?>