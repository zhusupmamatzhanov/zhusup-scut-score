<!DOCTYPE>


<html>
	<head>
		<title>This edit product part</title>

	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>


<body style="background-color:#F1F3F4;">

	<div class="main_wrapper" style="width:1000px; height:auto;	margin:auto;">


		<div id="header" >
			<h2 align="center">Here user can MODIFY products</h2>
		</div>

		<div id="right">
		<h2 style="text-align:center;">Manage Content</h2>


			<a href="index.php?view_products">View All Products</a>
			<a href="index.php?view_orders">View Orders</a>
			<a href="index.php?view_payments">View Payments</a>



		</div>

		<div id="left">
		<h2 style="color:blue; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php
		if(isset($_GET['insert_product'])){

		include("insert_product.php");

		}
		if(isset($_GET['view_products'])){

		include("view_products.php");

		}
		if(isset($_GET['edit_pro'])){

		include("edit_pro.php");

		}
		if(isset($_GET['insert_cat'])){

		include("insert_cat.php");

		}

		if(isset($_GET['view_cats'])){

		include("view_cats.php");

		}

		if(isset($_GET['edit_cat'])){

		include("edit_cat.php");

		}

		if(isset($_GET['insert_brand'])){

		include("insert_brand.php");

		}

		if(isset($_GET['view_brands'])){

		include("view_brands.php");

		}
		if(isset($_GET['edit_brand'])){

		include("edit_brand.php");

		}
		if(isset($_GET['view_customers'])){

		include("view_customers.php");

		}

		?>
		</div>






	</div>


</body>
</html>
