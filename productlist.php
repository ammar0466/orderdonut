<!DOCTYPE html>
<html>
<?php
	include 'connect.php';

	// echo "Database connected";
?>
<head>
	<title>Product List</title>

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
	</style>
</head>
<body>
	<h1>Product Listing</h1>

	<table id="tblproduct" name="tblproduct">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>IC</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Gender</th>
				<th>Topping</th>
				<th>Size</th>
				<th>Quantity</th>
				<th>Box Color</th>
				<th>Design File</th>
				<th>Comment</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
				$sql = "SELECT * FROM product";
				$result = mysqli_query($conn,$sql) or die("Cannot run query");
				$num_rows = mysqli_num_rows($result);

				$numbr = 1;
				if ($num_rows > 0) {
				# code...
				// echo "query returns";
					while ($row=mysqli_fetch_array($result)) {
						# code...
					
			?>
						<tr>
								<!-- <td><?php echo $numbr; ?></td> -->
								<td><?php echo $row['id'] ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['ic']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td><?php echo $row['topping']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['size']; ?></td>
								<td><?php echo $row['color']; ?></td>
								<td><?php echo $row['file']; ?></td>
								<td><?php echo $row['comment']; ?></td>
								<td>
									<a href="editprdt.php?id=<?php echo $row['id']; ?>">Edit</a>
									<a href="deleteprdt.php?id=<?php echo $row['id']; ?>">Delete</a>
								</td>
						</tr>	
			<?php
					}
				}
				else{
					echo "Table empty";

				}
			?>
			<?php mysqli_close($conn);?>
		</tbody>
	</table>
</body>
</html>