<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Donut</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <br><br>
        <div class="panel panel-primary formOrder">
          <div class="panel-heading"><h3>Order Donut Here </h3></div>
          <div class="panel-body">
            <form name="orderform" method="POST" enctype="multipart/form-data" action="saveformsubmit.php">
              <!-- <div class="form-group"> 
              Your name:<br>
              <input type="text" name="name" placeholder="Your name">
              <br><br>
              </div> -->
              <div class="form-group">
                <label for="fname">Your Name</label>
                <input type="text "class="form-control" name="fname" id="fname" placeholder="Name"></input>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text "class="form-control" name="address" id="address" placeholder="Address"></input>
              </div>
              <div class="form-group">
                <label for="checkbox">Choose Set</label>
                <div class="checkbox">
                <label>
                  <input type="checkbox" name="setdonut" value="donutset1">
                  Donut Set 1
                </label>
                </div>
                 <div class="checkbox">
                <label>
                  <input type="checkbox" name="setdonut" value="donutset2">
                  Donut Set 2
                </label>
                </div>
              </div>
              
              <!-- Donut Set : <br>
              <input type="checkbox" name="set1" value="Bike">Set 1<br>
              <input type="checkbox" name="set2" value="Car">Set 2 <br><br> -->
              <div class="form-group">
                <label for="drink">Choose Drink</label>
                <select name="drink" class="form-control">
                <option value="coffee">Coffee</option>
                <option value="coke">Coke</option>
                <option value="fanta">Fanta</option>
                <option value="cappucino">Cappucino</option>
              </select>
              </div>

              <!-- Drink:<br>
              <select name="drink">
                <option value="coffee">Coffee</option>
                <option value="coke">Coke</option>
                <option value="fanta">Fanta</option>
                <option value="cappucino">Cappucino</option>
              </select><br> -->
              

              <!-- #upload File using Html5 -->
              <!-- <p>Receipt:<br>
              <input type="file" name="fileupl"></p> -->
              <!-- #Upload Using Boostrap -->
              <div class="row">
                        <div class="col-md-8">
                          <label>Upload Receipt </label>
                          <input class="form-control" type="file" id="myfile" name="myfile" accept="image/gif, image/jpeg">
                        </div>
                        
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-md-6"><img width="216" height="180" alt="selected-file" id="imgpreview" name="imgpreview" src="" />
                      </div>

                    </div>





              <!-- <p>Remark :<br>
              <textarea name="remark" rows="4" cols="50" placeholder="Put any remarks or comment">

              </textarea></p> -->

              <!-- #Textarea with bootstrap -->
                <div class="remark">
                  <br>
                  <label>Remark/Comment </label>
                  <textarea class="form-control" name="remark"  rows="3"></textarea>
                </div>
                <br>                
                <!-- <div class="btn-group">
                <button type="submit" style="width:150px;" class="btn btn-info" name="login-btn" value="Submit">Submit</button>
                </div>  -->
                <div class="btn-group">
                  <button type="submit" class="btn btn-md btn-primary">Submit</button>
                  <button type="reset" id="btnreset" class="btn btn-md btn-reset">Reset</button>
                </div>         
            </form>
          </div>
        </div>
        
          

            
      </div>  
    </div>
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
      var f=document.getElementById('orderform');
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