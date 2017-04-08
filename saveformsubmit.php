<?php
//var_dump($_POST);
include 'connect.php';
//name field


		$dest='';
		if ( !isset($_POST['fname'])|| empty($_POST['fname'])){
			echo "Please fill in First name";
		}
		else{
			$fname = trim($_POST['fname']);
			echo "your name is ".$_POST['fname'];
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

		//setdonut  field
		if (!isset($_POST['setdonut']) || empty($_POST['setdonut'])) {
			# code...
			echo "Please choose your donut set<br>";
		}
			else{
				echo "Your set donut is :".$_POST['setdonut']."<br>";
				$setdonut = $_POST['setdonut'];
			}
		//Drink Field
		if (!isset($_POST['drink']) || empty($_POST['drink'])) {
					# code...
					echo "Please select Drink <br>";
				}
				else{
					echo "Your Drink is ".$_POST['drink']."<br>";
					$drink = $_POST['drink'];
				}
		if (isset($_FILES['myfile']))  {
				$filename=$_FILES['myfile']['name'];
				$tmpfile=$_FILES['myfile']['tmp_name'];

				if (!empty($filename)){
				$dest='upload/'.$filename;
				move_uploaded_file($tmpfile, $dest);

				//$sql2 = "INSERT INTO orderdonut(receipt) VALUES ('$dest')";
				
				}
		else {
				die('Empty FIle..');
			}

			}

		//upload file
		echo 'uploading file ....</br>';

			
		// comment remark
				if (!isset($_POST['remark']) || empty($_POST['remark'])) {
					# code...
					echo "Please leave your remark<br>";
				}
				else{
					echo "Thank you for your comment<br>";
					$remark = $_POST['remark'];
				}


		//mysql_connect($namahost,$namauser,$password)

		$conn=mysqli_connect('localhost','root','','mudah');
		 if(!$conn){
		  die('cannot connect to database');
		}


		//INSERT INTO DATABASE

		$sql = "INSERT INTO orderdonut(fname,address,setdonut,drink,receipt,remark) VALUES ('$fname','$address','$setdonut','$drink','$dest','$remark')";
		// $res=mysqli_query($conn,$sql2);

		$sql3="SELECT receipt FROM orderdonut  ORDER BY id desc LIMIT 1,1";
		$res2=mysqli_query($conn,$sql3);

		$row2=mysqli_fetch_assoc($res2);
		echo $row2['receipt'];
		echo '<a href="'.$row2['receipt'].'">view file</a>';

		mysqli_query($conn,$sql)or die("Cannot Insert Database");
		mysqli_close($conn);

		echo '<br>';
		echo 'successfully submit<br>';


echo '<a href="test.php">Back To order</a>';



?>