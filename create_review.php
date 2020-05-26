<?php require_once 'user_authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">

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

.li_a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  color: blue;
  font-family: 'Pacifico', cursive;
  font-size: 25px;
}

.li_a:hover:not(.active) {
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

	.h_4{
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

    img {
      margin: 30px 100px 10px;
      height: 250px;
      width: 340px;
    }

    [type="date"] {
    background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
    }
    [type="date"]::-webkit-inner-spin-button {
      display: none;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
      opacity: 0;
    }

    .label {
      display: block;
    }
    .input {
      border: 1px solid #c4c4c4;
      border-radius: 5px;
      background-color: #fff;
      padding: 3px 5px;
      box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
      width: 190px;
    }

    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    fieldset, label { margin: 0; padding: 0; }

    /****** Style Star Rating Widget *****/

    .rating { 
      border: none;
      float: left;
    }

    .rating > input { display: none; } 
    .rating > label:before { 
      margin: 5px;
      font-size: 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }

    .rating > .half:before { 
      content: "\f089";
      position: absolute;
    }

    .rating > label { 
      color: #ddd; 
     float: right; 
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: blue;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: blue;  } 
  </style>
</head>

<body>
  <ul>
    <form id="newform1" action="Home.php" method="post">
      <input type="hidden" name="home">
      <li class="li_a"><a onclick="document.getElementById('newform1').submit();">Home</a></li>
    </form>
    <form id="newform2" action="top_restaurant.php" method="post">
      <input type="hidden" name="top_restaurant" >
      <li class="li_a"><a onclick="document.getElementById('newform2').submit();">Top Restaurants</a></li>
    </form>
    <form id="newform3" action="top_reviews.php" method="post">
      <input type="hidden" name="top_reviews">
      <li class="li_a"><a onclick="document.getElementById('newform3').submit();">Top Reviews</a></li>
    </form>
    <form id="newform4" action="profile.php" method="post">
      <input type="hidden" name="profile">
      <li class="li_a"><a onclick="document.getElementById('newform4').submit();">My Profile</a></li>
    </form>
    <form id="newform5" action="index.php" method="post">
      <input type="hidden" name="logout">
      <li class="li_a" style="float: right;"><a onclick="document.getElementById('newform5').submit();">Log Out</a></li>
    </form>
    <form class="form_class" style="float: right;" method="post" action="food_search.php">
      <input id="search" type="text" placeholder="Search..." value="<?php echo $src_txt;?>" name="search">
      <button id="submit" type="submit" name="search-icon"><i class="fa fa-search"></i></button>
    </form>
  </ul>

	<center><h4 class="h_4"><b>Write A Review</b></h4></center>
  <img src="<?php $id=$_SESSION['res_id']; echo "restaurant/$id.jpg"; ?>">
  <h4 class="h_4" style="margin: 140px 190px 10px; float: right;"><b><?php echo $restaurant['res_name'][0]; ?></b></h4>
	<div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div">
          <form action="create_review.php" method="post">

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
              <label for="review"><h4><b>Review</b></h4></label><br>
              <textarea rows="10" cols="60" name="review"></textarea>
            </div> 

            <div class="form-group">
              <label for="pricing"><h4 ><b>Is Food Taking Out Allowed?</b></h4></label> <br>
                <input type="radio" name="pricing" value="Mid Range" > <label><h5><b>Cheap </b></h5></label>
                <input type="radio" name="pricing" value="" checked> <label><h5><b>Mid Range </b></h5></label>
                <input type="radio" name="pricing" value="Expensive" > <label><h5><b>Expensive </b></h5></label>
            </div>

            <div class="form-group">
              <label for="foodfor"><h4 ><b>Food For?</b></h4></label> <br>
                <input type="radio" name="foodfor" value="Breakfast" > <label><h5><b>Breakfast </b></h5></label>
                <input type="radio" name="foodfor" value="Lunch" checked> <label><h5><b>Lunch </b></h5></label>
                <input type="radio" name="foodfor" value="Dinner" > <label><h5><b>Dinner </b></h5></label><br>
                <input type="radio" name="foodfor" value="Snacks" > <label><h5><b>Snacks </b></h5></label>
                <input type="radio" name="foodfor" value="Other" > <label><h5><b>Other </b></h5></label>
            </div>

            <div class="form-group">
              <label for="recommendation"><h4><b>Any Recommendation?</b></h4></label><br>
              <textarea rows="2" cols="60" name="recommendation"></textarea>
            </div> 

            <div class="form-group">
              <label class=".label" for="date"><h4><b>Experienced Time?</b></h4></label>
              <input type="date" class=".input" name="date" id="dateofbirth">
              <input type="time" name="time" value="13:00" step="900">
            </div>

            <label class=".label" for="total_rating"><h4><b>Overall Rating?</b></h4></label><br>
            <fieldset class="rating">
                <input type="radio" id="star5" name="total_rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="total_rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="total_rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="total_rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="total_rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>

            <br><br>

            <label class=".label" for="service_rating"><h4><b>Service Rating?</b></h4></label><br>
            <fieldset class="rating">
                <input type="radio" id="star5" name="service_rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="service_rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="service_rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="service_rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="service_rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>

            <br><br>

            <label class=".label" for="food_rating"><h4><b>Food Rating?</b></h4></label><br>
            <fieldset class="rating">
                <input type="radio" id="star5" name="food_rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="food_rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="food_rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="food_rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="food_rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>

            <br><br>

            <label class=".label" for="price_rating"><h4><b>Price Rating?</b></h4></label><br>
            <fieldset class="rating">
                <input type="radio" id="star5" name="price_rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="price_rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="price_rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="price_rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="price_rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>
            
            <div class="form-group">
              <button type="submit" name="create-review-btn" class="btn btn-primary btn-block btn-lg">Submit</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

</html>
</body>
</html>