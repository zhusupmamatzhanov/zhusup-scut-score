<!DOCTYPE>
<?php

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
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="admin_area/insert_product.php" target="_blank">Sell</a></li>
				<li><a href="customer/modify/index.php" target="_blank">Modify</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="admin_area/login.php" target="_blank">Admin</a></li>

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
		<div class="content_wrapper" style="background-color:#F1F1F1;">

			<div id="sidebar">

				<div id="sidebar_title">Categories</div>

				<ul id="cats">

				<?php getCats(); ?>

				<ul>

				<div id="sidebar_title">Brands</div>

				<ul id="cats">

					<?php getBrands(); ?>

				<ul>


			</div>

			<div id="content_area" style="background-color:#F1F1F1;">

			<div id="shopping_cart">

					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">

					Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>



					</span>
			</div>

				<div id="products_box">
	<?php
	$get_pro = "select * from products";

	$run_pro = mysqli_query($con, $get_pro);

	while($row_pro=mysqli_fetch_array($run_pro)){

		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];

		echo "
				<div id='single_product'>

					<h3>$pro_title</h3>

					<img src='admin_area/product_images/$pro_image' width='180' height='180' />

					<p><b> $ $pro_price </b></p>

					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>

					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>

				</div>


		";

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
