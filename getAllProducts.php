<?php
	require_once 'connection.php';
	
	$query = "select * from products";
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

    <title>All Products!</title>
  </head>
  <body>
  	<div class=" container-fluid jumbotron">
  		<h1 class="text-center text-grey mt-3">Welcome to the Laptop valley <br>Our Top Rated Products!
  		</h1>

  		<div class="row">
  			<?php
  				if (mysqli_num_rows($result) > 0) {
  			
	  				while ($row = mysqli_fetch_assoc($result)) {
	  					echo '<div class="col-3 mt-5">
		  				<div class="card" style="width: 18rem;">
						  <img class="card-img-top " src="uploads/'.$row["image"].'" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">'.$row["title"]." ($".$row["price"].") ".'</h5>
						    <p class="card-text">'.$row["description"].'</p>
						    <a href="productDetails.php?productId='.$row["id"].'" class="btn btn-primary">View Details!</a>
						  </div>
						</div>
		  				</div>';
	  				}
	  			}
  			?>
  			
  		</div>
  	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



