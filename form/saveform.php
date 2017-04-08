<?php

	//var_dump($_POST);

	include 'connect.php';

	if (isset($_POST['submit'])){
		
		//name field
		if (!isset($_POST['name']) || empty($_POST['name'])) {
			# code...
			echo "<br>Please fill in your name<br>";
		}
		else{
			echo "<br>Your name is ".$_POST['name']."<br>";
			$name = $_POST['name'];
		}

		//IC field
		if (!isset($_POST['ic']) || empty($_POST['ic'])) {
			# code...
			echo "Please fill in your IC<br>";
		}
		else{
			echo "Your ic is ".$_POST['ic']."<br>";
			$ic = $_POST['ic'];
		}

		//address field
		if (!isset($_POST['address']) || empty($_POST['address'])) {
			# code...
			echo "Please fill in your address<br>";
		}
		else{
			echo "Your address is ".$_POST['address']."<br>";
			$address = $_POST['address'];
		}

		//number field
		if (!isset($_POST['number']) || empty($_POST['number'])) {
			# code...
			echo "Please fill in your number<br>";
		}
		else{
			echo "Your telephone number is ".$_POST['number']."<br>";
			$number = $_POST['number'];
		}

		//gender field
		if (!isset($_POST['gender']) || empty($_POST['gender'])) {
			# code...
			echo "Please fill in your gender<br>";
		}
		else{
			echo "Your gender is ".$_POST['gender']."<br>";
			$gender = $_POST['gender'];
		}

		//product field
		if (!isset($_POST['product']) || empty($_POST['product'])) {
			# code...
			echo "Please fill in your product<br>";
		}
		else{
			echo "Your product is ".$_POST['product']."<br>";
			$product = $_POST['product'];
		}

		//size field
		if (!isset($_POST['select']) || empty($_POST['select'])) {
			# code...
			echo "Please select size<br>";
		}
		else{
			echo "Your pizza size is ".$_POST['select']."<br>";
			$size = $_POST['select'];
		}

		//quantity field
		if (!isset($_POST['quantity']) || empty($_POST['quantity'])) {
			# code...
			echo "Please fill in the quantity<br>";
		}
		else{
			echo "Your quantity is ".$_POST['quantity']."<br>";
			$quantity = $_POST['quantity'];
		}

		//color field
		if (!isset($_POST['color']) || empty($_POST['color'])) {
			# code...
			echo "Please fill in your desired color<br>";
		}
		else{
			echo "Your box color is ".$_POST['color']."<br>";
			$color = $_POST['color'];
		}

		//file upload
		if (!isset($_POST['file']) || empty($_POST['file'])) {
			# code...
			echo "Please upload your file<br>";
		}
		else{
			echo "Your design is ".$_POST['file']."<br>";
			$file = $_POST['file'];
		}

		// comment
		if (!isset($_POST['textarea']) || empty($_POST['textarea'])) {
			# code...
			echo "Please leave your comment<br>";
		}
		else{
			echo "Thank you for your comment<br>";
			$comment = $_POST['textarea'];
		}
		
		//INSERT INTO DATABASE

		$sql = "INSERT INTO product(name,ic,address,contact,gender,topping,size,quantity,color,file,comment) VALUES ('$name','$ic','$address','$number','$gender','$product','$size','$quantity','$color','$file','$comment')";

		// mysql_query($sql) or die("Cannot connect");
		mysqli_query($conn,$sql);
		mysqli_close($conn);

		echo "<a href="form.php">Back to order form</a>";		
	}
	else{
		echo "No data received";
	}

	
?>