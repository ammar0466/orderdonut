 <!DOCTYPE html>
<html>
<?php
$conn=mysqli_connect('localhost','root','','mudah');

if (!$conn) {

	die('Cannot connect to database');
	# code...
}else{
	echo 'connect to data base';
}
?>
<head>
<meta charset="UTF-8">
	<title>Product Listing</title>

	<style type="text/css">
		#tblproduct{
			border: solid 5px #ddd;
			border-collapse: collapse;
			width: 95%;
			font-family: "Callibri", sans;
			font-size: 14px;
			text-align:center;

		}
		#tblproduct tr, #tblproduct td , #tblproduct th {
			border : solid 1px #ccc;
			height: 42px;
		}

		#tblproduct th {
			background-color: #ffc
		}

		#tblproduct tr:nth-child(even) {
			height: 48px;
			color: #000;
			background-color: #567
		}

		#tblproduct tr:nth-child(odd) {
			height: 48px;
			color: #444;
			background-color: #189
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
		<th>Brand</th>
		<th>No phone</th>
		<th>Address</th>
		<th>Action</th>
		 	</thead>
	<tbody>

	<?php 
$sql="SELECT * FROM tb_cform WHERE u_name like '%a%'";
$res=mysqli_query($conn,$sql) or die('cannot run query');
$num_rows= mysqli_num_rows($res);

$numbr=1;

if ($num_rows>0) {

	while ($row=mysqli_fetch_array($res)){

	?>
	<tr>
		
		
		<td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['u_name']; ?></td>
		<td><?php echo $row['u_email'];?></td>	
		<td><?php echo $row['subj']; ?></td>
		<td><?php echo $row['message']; ?></td>
		 
		<td><a href="editproduct.php?idx=<?php echo $row['ID']; ?>"> Edit</a> |<a href="deleteproduct.php?idx=<?php echo $row['ID']; ?>"> Delete</a></td>
		</tr>

		<?php
	}
	//echo 'query return rows';
	# code...
}else {
	echo 'table empyt';
}
?>
		
	</tbody>


</table>

</body>
</html>