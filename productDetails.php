<?php
	require_once 'connection.php';
	$id=$_GET['productId'];
	$query = "select * from products where id=$id";
	$result = mysqli_query($connection,$query);
?>	
	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Product Details!</title>
  </head>
  <body>
  	<div class=" container-fluid jumbotron">
  		<h1 class="text-center text-grey mt-3">Here is the Details of the product you just Clicked! 
  		</h1>

  		<div class="row justify-content-center">
  			<?php
  				if (mysqli_num_rows($result) > 0) {
  			
	  				while ($row = mysqli_fetch_assoc($result)) {
	  					echo '<div class="col-3 mt-5 ">
		  				<div class="card" style="width: 25rem;">
						  <img class="card-img-top " src="uploads/'.$row["image"].'" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">'.$row["title"]." ($".$row["price"].") ".'</h5>
						    <p class="card-text">'.$row["description"].'</p>
						    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                  Buy now!
                </button>
						  </div>
						</div>
		  				</div>';
	  				}
	  			}
  			?>
  			
  		</div>
  	</div>
 

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fill the information for payment on Stripe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="processPayment.php" method="post">
          <div class="form-group">
            <label for="exampleFormControlInput1">First Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="fname">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Last Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="lname">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
            <input type="hidden" class="form-control"  value="100" id="exampleFormControlInput1" name="amount">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Check Out</button>
      </div></form>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



