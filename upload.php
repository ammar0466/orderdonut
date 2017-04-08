<?php
	include 'connect.php';

	//if(!isset($_FILES['myfile'])||empty($_FILES['myfile'])){
	//	die('Empty file');
	//}
	//else
	if (isset($_FILES['myfile']))  {
		$filename=$_FILES['myfile']['name'];
		$tmpfile=$_FILES['myfile']['tmp_name'];

		if (!empty($filename)){
		$dest='upload/'.$filename;
		move_uploaded_file($tmpfile, $dest);

		$sql = "INSERT INTO product(description) VALUES ('$dest')";
		$res=mysqli_query($conn,$sql);
		}
		else {
			die('Empty FIle..');
		}

	}

	echo 'uploading file ....</br>';

	$sql2="SELECT description FROM product  ORDER BY id desc LIMIT 1,1";
	$res2=mysqli_query($conn,$sql2);

	$row2=mysqli_fetch_assoc($res2);
	echo $row2['description'];
	echo '<a href="'.$row2['description'].'">view file</a>';
	?>