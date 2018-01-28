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
 if ($login == true) {
 	header("Location:category.php");
 }
?>
<?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
							$custLog = $cmr->customerLogin($_POST);
						}
                    ?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
    	 <?php
    	if (isset($custLog)) {
    		echo $custLog;
    	}
    	?>
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="" method="post">
                	<input name="email" placeholder="E-Mail" type="text">
                    <input name="pass" placeholder="Passoword" type="password">
                    <div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>
                    </div>
                 </form>
            
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
							$customerReg = $cmr->customerRegistration($_POST);
						}
                    ?>
    	<div class="register_account">
    	<?php
    	if (isset($customerReg)) {
    		echo $customerReg;
    	}
    	?>
    		<h3>Register New Account</h3>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name= "name" placeholder="Name"/>
							</div>
							
							<div>
							   <input type="text" name= "city" placeholder="City"/>
							</div>
							
							<div>
								<input type="text" name= "zip" placeholder="Zip-Code"/>
							</div>
							<div>
								<input type="text" name= "email" placeholder="E-Mail"/>
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name= "address" placeholder="Address"/>
						</div>
		    		<div>
							<input type="text" name= "country" placeholder="Country"/>
						</div>
	
		           <div>
		          <input type="text" name= "phone" placeholder="Phone"/>
		          </div>
				  
				  <div>
					<input type="text" name= "pass" placeholder="Passoword"/>
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		  <div class="search"><div><button class="grey" name="register">Create Account</button></div></div>

		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
 <?php
include 'inc/footer.php';
?>