<!DOCTYPE HTML>
<html>
<head>
	
	<meta charset="utf-8">
	<title>
		Polish your skill with bootstrap and jQuery
	</title>

	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<div class="container">
	<form id="newform" name="newform" enctype="multipart/form-data" class="form-horizontal" action="upload.php" method="post">
	<div class="panel panel-success">
	  <div class="panel-heading">Polish Your Skill With Bootstrap and jQuery</div>
  	<div class="panel-body">
	    <div class="row">
	    	<div class="col-md-10 col-md-offset-1">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<label>Upload File </label>
	    				<input class="form-control" type="file" id="myfile" name="myfile" accept="image/gif, image/jpeg">
    				</div>
    				
				</div>
				<br/>
				<div class="row">
					<div class="col-md-6"><img width="216" height="180" alt="selected-file" id="imgpreview" name="imgpreview" src="" />
					</div>

				</div>
			</div>
		</div>
	</div>
	  
	<div class="panel-footer">
	  	<div class="btn-group">
	  		<button type="submit" class="btn btn-md btn-primary">Submit</button>
	  		<button type="reset" id="btnreset" class="btn btn-md btn-reset">Reset</button>
		</div>
	</div>
	</form>
</div>

</body>
<script src="js/jquery-3.2.0.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//alert('page loaded dah successfully');
		$('#myfile').on('change', function(){
			readURL(this);
		});

		$('#btnreset').on('click',function(){
			var f=document.getElementById('newform');
			f.reset();
			$('#imgpreview').attr('src','');
		});
	});
	function readURL(input){
		if (input.files && input.files[0]){
			var reader = new FileReader();

			reader.onload = function(e){
				$('#imgpreview').attr('src',e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
</html>