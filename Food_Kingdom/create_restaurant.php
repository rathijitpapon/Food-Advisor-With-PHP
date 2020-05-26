<?php require_once 'user_authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Food Kingdom</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobstar" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  color: blue;
  font-family: 'Pacifico', cursive;
  font-size: 25px;
}

li a:hover:not(.active) {
  background-color: lightblue;
}

.form_class{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  color: black;
  font-family: 'Satisfy', cursive;
  font-size: 25px;
}

</style>

  <style>
  	body{
  		background-image: url(su.jpg);
      background-size: cover;
      background-repeat: no-repeat;
  	}

	.form-div{
		margin: 50px auto 50px;
		padding: 25px 15px 10px 15px;
		border: 1px solid #80ced7
		border-radius: 5px;
		font-size: 1.1em;
		font-family: 'Lora', serif;
	}

	.form-control: focus{
		box-shadow: none;
	}

	form p{
		font-size: .89em;
	}

	.form-div{
		margin: 5px;
	}

	.logout{
		color: red;
	}

	h4{
		top: 20px;
		font-size: 2.8em;
		font-family: 'Bree Serif', cursive;
	}

	#googleMaps {
        height: 50%;
        width: 30%;
        position:absolute;
        top: 20%;
        left: 65%;
        z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
    }
  </style>
</head>

<body>
  <ul>
    <li><a href="Home.php">Food Kingdom</a></li>
    <li><a href="#">Top Restaurants</a></li>
    <li><a href="#">Top Reviews</a></li>
    <li><a href="profile.php">My Profile</a></li>
    <li style="float:right"><a href="index.php">Log Out</a></li>
    <form class="form_class" style="float: right;" method="post" action="food_search.php">
      <input id="search" type="text" placeholder="Search..." value="<?php echo $src_txt;?>" name="search">
      <button id="submit" type="submit" name="search-icon"><i class="fa fa-search"></i></button>
    </form>
  </ul>

	<center><h4><b>Promote Your Restaurant</b></h4></center>
	<div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div">
          <form action="create_restaurant.php" method="post">

            <?php if(count($errors) > 0): ?>
              <div class="alert alert-danger">
                <?foreach ($errors as $error): ?>
                  <li>
                    <?php echo "$error"; ?>
                  </li>
                <?php endforeach; ?>
              </div>
            <?php endif;?>

            <div class="form-group">
              <label for="res_name">Restaurant Name</label>
              <input type="text" name="res_name" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" name="country" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="division">Division</label>
              <input type="text" name="division" class="form-control form-control-lg">
            </div>

            <div class="form-group">
              <label for="district">District</label>
              <input type="text" name="district" class="form-control form-control-lg">
            </div>  

            <div class="form-group">
              <label for="area">Area</label>
              <input type="text" name="area" class="form-control form-control-lg">
            </div>  

            <div class="form-group">
              <label for="road">Road Address</label>
              <input type="text" name="road" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="house">House Address</label>
              <input type="text" name="house" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="contact">Contact</label>
              <input type="text" name="contact" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="web">Website Address</label>
              <input type="text" name="web" class="form-control form-control-lg">
            </div>           

            <div class="form-group">
              <label for="about">About</label><br>
              <textarea rows="3" cols="40" name="about"></textarea>
            </div> 

            <div class="form-group">
              <h2><b>Additional Features</b></h2>
              <label for="self-cooking">Have Any Elevator?</label> 
      			  <input type="radio" name="self-cooking" value="Yes" checked> Yes 
      			  <input type="radio" name="self-cooking" value="No"> No<br>

      			  <label for="reservation">Is Pre-Reservation Allowed?</label> 
      			  <input type="radio" name="reservation" value="Yes" checked> Yes 
      			  <input type="radio" name="reservation" value="No"> No<br>

      			  <label for="parking">Is Parking Area Available?</label> 
      			  <input type="radio" name="parking" value="Yes" checked> Yes 
      			  <input type="radio" name="parking" value="No"> No<br>

      			  <label for="alcohol">Is Alcohol Drinking allowed?</label> 
      			  <input type="radio" name="alcohol" value="Yes" checked> Yes 
      			  <input type="radio" name="alcohol" value="No"> No<br>

      			  <label for="credit-card">Is Debit Card System Allowed?</label> 
      			  <input type="radio" name="credit-card" value="Yes" checked> Yes 
      			  <input type="radio" name="credit-card" value="No"> No<br>

      			  <label for="free-wifi">Is Free Wifi Service Available?</label> 
      			  <input type="radio" name="free-wifi" value="Yes" checked> Yes 
      			  <input type="radio" name="free-wifi" value="No"> No<br>

      			  <label for="takeout">Is Food Taking Out Allowed?</label> 
      			  <input type="radio" name="takeout" value="Yes" checked> Yes 
      			  <input type="radio" name="takeout" value="No"> No<br>
            </div>

            <div class="form-group">
              <button type="submit" name="create-restaurant-btn" class="btn btn-primary btn-block btn-lg">Submit</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="maps.js"> </script>
    <div class = "container-fluid" id="googleMaps"></div>
</body>
</html>