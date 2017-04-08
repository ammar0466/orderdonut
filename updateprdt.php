<?php

	include 'connect.php';

	$prdt_id = $_POST['product_id'];

	$name = $_POST['inname'];
	$ic = $_POST['inic'];
	$address = $_POST['inaddress'];
	$contact = $_POST['incontact'];
	$gender = $_POST['ingender'];
	$toppping = $_POST['intopping'];
	$quantity = $_POST['inquantity'];
	$color = $_POST['incolor'];
	$file = $_POST['infile'];
	$comment = $_POST['incomment'];


	//name field
	if (!isset($_POST['inname']) || empty($_POST['inname'])) {
		# code...
		echo "Input empty";

		die();
	}
	
	//ic field
	if (!isset($_POST['inic']) || empty($_POST['inic'])) {
		# code...
		echo "Input empty";
		die();
	}
		



	//address field
	if (!isset($_POST['inaddress']) || empty($_POST['inaddress'])) {
		# code...
		echo "Input empty";
		die();
	}


	

	//contact field
	if (!isset($_POST['incontact']) || empty($_POST['incontact'])) {
		# code...
		echo "Input empty";
		die();
	}
	


	//gender field
	if (!isset($_POST['ingender']) || empty($_POST['ingender'])) {
		# code...
		echo "Input empty";
		die();
	}
	

	//topping field
	if (!isset($_POST['intopping']) || empty($_POST['intopping'])) {
		# code...
		echo "Input empty";
		die();
	}

	

	//size field
	if (!isset($_POST['insize']) || empty($_POST['insize'])) {
		# code...
		echo "Input empty";
		die();
	}

	$size = $_POST['insize'];

	//quantity field
	if (!isset($_POST['inquantity']) || empty($_POST['inquantity'])) {
		# code...
		echo "Input empty";
		die();
	}

	

	//color field
	if (!isset($_POST['incolor']) || empty($_POST['incolor'])) {
		# code...
		echo "Input empty";
		die();
	}

	
	//file field
	if (!isset($_POST['infile']) || empty($_POST['infile'])) {
		# code...
		echo "Input empty";
		die();
	}

	

	//comment field
	if (!isset($_POST['incomment']) || empty($_POST['incomment'])) {
		# code...
		echo "Input empty";
		die();
	}

	

	$sql = "UPDATE product SET name='$name',ic='$ic',address='$address',contact='$contact',gender='$gender',topping='$gender',size'$size',quantity='$quantity',color='$color',file='$file',comment='$comment' WHERE id='$prdt_id'";

	var_dump($sql);
	$result = mysqli_query($conn,$sql) or die('Cannot');

	if ($result) {
		# code...
		echo "Update successfully";
	}
	else{
		echo "Cannot update table";
	}

	echo '<br /><a href="productlist.php">Back</a>';
	mysqli_close($conn);

?>