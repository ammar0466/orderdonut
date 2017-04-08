<?php
	include 'connect.php';

	$prdt_id = $_POST['product_id'];

	$sql = "DELETE FROM product WHERE id='$prdt_id'";
	$result = mysqli_query($conn,$sql) or die("cannot");

	if ($result) {
		# code...
		echo "Delete Successfully";
	}
	else{
		echo "Cannot delete table";
	}

	echo '<br><a href="productlist.php">Back</a>';
?>