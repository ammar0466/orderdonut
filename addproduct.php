<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Donut</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
<style>



</style>

</head>
<body>
<div class="col-md-4 col-md-offset-4">
<h1> Add Product Here </h1>

<form method="post" action="saveformsubmit.php">
  Product name:<br>
  <input type="text" name="product" placeholder="Product name">
  <br><br>
  
  Address:<br>
  <input type="text" name="address" placeholder="Address">
  
  <br><br>
  Donut Set : <br>
  <input type="checkbox" name="set1" value="Bike">Set 1<br>
	<input type="checkbox" name="set2" value="Car">Set 2 <br><br>
	
	Drink:<br>
	<select name="drink">
    <option value="coffee">Coffee</option>
    <option value="coke">Coke</option>
    <option value="fanta">Fanta</option>
    <option value="cappucino">Cappucino</option>
  </select><br>
  
  <p>Receipt:<br>
  <input type="file" name="fileupl"></p>
  <p>Remark :<br>
  <textarea name="remark" rows="4" cols="50" placeholder="Put any remarks or comment">

</textarea></p>
  
  
	<br><br>
  
  

  <div class="btn-group">
    <button type="submit" style="width:150px;" class="btn btn-info" name="login-btn" value="Submit">Submit</button>
  </div>
  
  
  
</form>
</div>

  <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>