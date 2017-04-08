<!DOCTYPE html>
<html>
<?php
	include 'connect.php';
?>
<head>
	<title>Product Edit</title>

	<meta charset="utf-8">

	<style type="text/css">
		#tblproduct{
			border: solid 2px black;
			border-collapse: collapse;
			width: 100%;
			font-family: "Callibri", sans;
			font-size: 14px;
			text-align: center;
		}
		#tblproduct tr, #tblproduct td{
			border: solid 1px black;
			height: 42px;
		}
		#tblproduct th{
			border: solid 1px black;
			height: 42px;
			background-color: grey;
		}
		#tblproduct tr:nth-child(even){
			height: 48px;
			color: #000;
			background-color: #ddd;
		}
		#tblproduct tr:nth-child(odd){
			height: 48px;
			color: #000;
			background-color: #f4ffc6;
		}
		.input{
			width: 90%;
		}
		button{
			background-color: purple;
		}
	</style>
</head>
<body>
	<?php
		$passid = $_GET['id'];
		$sql = "SELECT * FROM product WHERE id='$passid'";
		$result = mysqli_query($conn,$sql) or die('Cannot run query');
		$row = mysqli_fetch_assoc($result);


	?>

	<h1>Product Edit</h1>

	<form id="editform" name="editform" method="post" action="updateprdt.php">
		
		<input type="hidden" name="product_id" value="<?php echo $passid; ?>">
		
		<table id="tblproduct" name="tblproduct">
			<tr>
				<th>ID</th>
				<th><?php echo $row['id']; ?></th>
			</tr>

			<tr>
				<td>Name</td>
				<td><input class="input" type="text" name="inname" id="inname" value="<?php echo $row['name']; ?>" /></td>
			</tr>
			<tr>
				<td>IC</td>
				<td><input class="input" type="text" name="inic" id="inic" value="<?php echo $row['ic']; ?>" /></td>
			</tr>			
			<tr>
				<td>Address</td>
				<td><input class="input" type="text" name="inaddress" id="inaddress" value="<?php echo $row['address']; ?>" /></td>
			</tr>			
			<tr>
				<td>Contact Number</td>
				<td><input class="input" type="tel" name="incontact" id="incontact" value="<?php echo $row['contact']; ?>" /></td>
			</tr>		
			<tr>
				<td>Gender</td>
				<td><input class="input" type="text" name="ingender" id="ingender" value="<?php echo $row['gender']; ?>" /></td>
			</tr>			
			<tr>
				<td>Topping</td>
				<td><input class="input" type="text" name="intopping" id="intopping" value="<?php echo $row['topping']; ?>" /></td>
			</tr>			
			<tr>
				<td>Size</td>
				<td><input class="input" type="text" name="insize" id="insize" value="<?php echo $row['size']; ?>" /></td>
			</tr>			
			<tr>
				<td>Quantity</td>
				<td><input class="input" type="number" name="inquantity" id="inquantity" value="<?php echo $row['quantity']; ?>" /></td>
			</tr>			
			<tr>
				<td>Color</td>
				<td><input class="input" type="color" name="incolor" id="incolor" value="<?php echo $row['color']; ?>" /></td>
			</tr>			
			<tr>
				<td>File Design</td>
				<td><input class="input" type="file" name="infile" id="infile" value="<?php echo $row['file']; ?>" /></td>
			</tr>			
			<tr>
				<td>Comment</td>
				<td><input class="input" type="comment" name="incomment" id="incomment" value="<?php echo $row['comment']; ?>" /></td>
			</tr>
			<tr style="background-color: grey">
				<td colspan="2">
				<center>
					<button type="submit" name="submit">Update</button>
					<button type="reset" name="reset">Reset</button>
				</center>
				</td>
			</tr>
		</table>

	</form>
</body>
</html>