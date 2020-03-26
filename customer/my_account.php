<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>


	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>

<body>

	<!--Main Container starts here-->
	<div class="main_wrapper" style="background-color: #0C7ED9;">

		<!--Header starts here-->
		<div class="header_wrapper">

			<img  src="images/logobek.png" style="float:left; height:65px; padding-left:50px; padding-top:15px"  />
			<p style="font-size: 60px; font-style: bold; color: white; padding-top: 10px; padding-left:450px;">SCUT STORE</p>
		</div>
		<!--Header ends here-->

		<!--Navigation Bar starts-->
		<div class="menubar">

			<ul id="menu">
				<li><a href="../index.php">Home</a></li>
				<li><a href="../all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="../admin_area/insert_product.php" target="_blank">Sell</a></li>
				<li><a href="../customer/modify/index.php" target="_blank">Modify</a></li>
				<li><a href="../cart.php">Shopping Cart</a></li>
				<li><a href="../admin_area/login.php" target="_blank">Admin</a></li>

			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ >
					<input type="submit" name="search" value="Search" />
				</form>

			</div>

		</div>
		<!--Navigation Bar ends-->

		<!--Content wrapper starts-->
		<div class="content_wrapper">

			<div id="sidebar">

				<div id="sidebar_title">My Account:</div>

				<ul id="cats">
				<?php
				$user = $_SESSION['customer_email'];

				$get_img = "select * from customers where customer_email='$user'";

				$run_img = mysqli_query($con, $get_img);

				$row_img = mysqli_fetch_array($run_img);

				$c_image = $row_img['customer_image'];

				$c_name = $row_img['customer_name'];

				echo "<p style='text-align:center;'><img src='customer_images/$c_image' width='150' height='150'/></p>";

				?>
				<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>
				<li><a href="logout.php">Logout</a></li>

				<ul>

				</div>


			<div id="content_area">

			<?php cart(); ?>

			<div id="shopping_cart">

					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">

					<?php
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] ;

					}
					?>


					<?php
					if(!isset($_SESSION['customer_email'])){

					echo "<a href='checkout.php' style='color:orange;'>Login</a>";

					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}



					?>



					</span>
			</div>

				<div id="products_box">



				<?php
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){

				echo "
				<h2 style='padding:20px;'>Welcome:  $c_name </h2>
				<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}
				}
				}
				}
				?>

				<?php
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}


				?>

				</div>

			</div>
		</div>
		<!--Content wrapper ends-->



		<div id="footer">

		<p style="text-align:center; padding-top:15px;">&copy; <b>2019 by International Students
	</br>
		MAMATZHANOV ZHUSUP 201669998665
		</br>
		FAZLEY MEHRAB SHURJO 201669998878
		</br>
		NOPPARUJ TIPPAYAKRAISORN 201669998576</b>
	</p>

		</div>






	</div>
<!--Main Container ends here-->


</body>
</html>
