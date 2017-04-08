<?php
$product_id=$_POST['product_id'];

if (!isset($_POST['inpname'])|| empty($_POST['inpname'])){
	die ('Input Empty');
}
$nama=$_POST['inpname'];

$conn=mysqli_connect('localhost','root','','mudah');
if(!$conn){
	die('Cannot connect to database');
}
$sql="UPDATE product SET name ='$nama' WHERE id='$product_id'";
$result=mysqli_query($conn,$sql);

if($result){
	echo 'Update succesful';
}
else{
	echo 'Cannot update table';
}