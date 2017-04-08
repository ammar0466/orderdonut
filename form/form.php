<!DOCTYPE html>
<html>
<head>
	<title>Order Form</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: black">
	<center>
	<div class="container">
		<h1>Order Form</h1>

		<h3>Please enter your order</h3>

		<form name="order" action="saveform.php" method="post">
		<fieldset>
			<label>Name</label><br>
			<input type="text" name="name" placeholder="Your Name" tabindex="3" style="width: 100%">
		</fieldset>

		<fieldset>
			<label>IC Number</label><br>
			<input type="text" name="ic" placeholder="Your Identification Card" tabindex="3" style="width: 100%">
		</fieldset>

		<fieldset>
			<label>Address</label><br>
			<input type="text" name="address" placeholder="Your Address" tabindex="3" style="width: 100%; height: 50px;">
		</fieldset>

		<fieldset>
			<label>Contact Number</label><br>
			<input type="tel" name="number" placeholder="Your Contact Number" style="width: 100%">
		</fieldset>

		<fieldset>
			<label>Please select your gender.</label><br>
			<input type="radio" name="gender" value="male">Male</t>
			<input type="radio" name="gender" value="female">Female
		</fieldset>
		
		<fieldset>
			<label>Please tick your desired topping</label><br>
			<input type="checkbox" name="product" value="Cheese">Cheese
			<input type="checkbox" name="product" value="Mushrooms">Mushrooms
			<input type="checkbox" name="product" value="Pepperonni">Pepperonni
		</fieldset>
		
		<fieldset>
			<label>Please select your desired size</label>
			<select name="select" tabindex="3"  style="width: 100%">
			<option name="small" value="small" selected="selected">Small</option>
			<option name="med" value="med">Medium</option>
			<option name="big" value="big">Large</option>
			</select>
		</fieldset>

		<fieldset>
			<label>Quantity</label><br>
			<input type="number" name="quantity" placeholder="Please insert quantity" tabindex="3"  style="width: 100%">
		</fieldset>

		<fieldset>
			<label>Your desired box color</label><br>
			<input type="color" name="color" style="width: 100%">
		</fieldset>

		<fieldset>
			<label>Your Pizza Suggestion Design</label><br>
			<input type="file" name="file">
		</fieldset>

		<fieldset>
			<textarea name="textarea" tabindex="50" placeholder="Leave Your Comment Here..."  style="width: 100%; height: 50px"></textarea>
		</fieldset>
		
		
			<button name="submit" type="submit">Submit</button>
			<button name="reset" type="reset">Reset</button>			
		</form>

		<hr><a href="productlist.php">Product List</a>

	</div>
	</center>
</body>
</html>