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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobstar" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
  .leftcolumn {   
    float: left;
    width: 40%;
  }

  .rightcolumn {
    float: left;
    width: 50%;
    padding-left: 10px;
  }

  .fakeimg {
    width: 100%;
    height: 100%;
    padding: 5px;
  }

  .card {
    background-color: lightblue;
    padding: 15px;
    margin-top: 10px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

</style>

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
    <form class="form_class" style="float: right;" method="post" action="cuisine_search.php">
      <input id="search" type="text" placeholder="Search..." value="<?php echo $src_txt;?>" name="search">
      <button id="submit" type="submit" name="search-icon"><i class="fa fa-search"></i></button>
    </form>
  </ul>

  <br>
  <ul style="background-color: green">
    <form id="newform6" action="food_search.php" method="post">
      <input type="hidden" name="food_search">
      <li class="li_a" style="color: lightblue;"><a onclick="document.getElementById('newform6').submit();">Food</a></li>
    </form>
    <form id="newform7" action="restaurant_search.php" method="post">
      <input type="hidden" name="restaurant_search" >
      <li class="li_a" style="color: lightblue;"><a onclick="document.getElementById('newform7').submit();">Restaurants</a></li>
    </form>
    <form id="newform8" action="cuisine_search.php" method="post">
      <input type="hidden" name="cuisine_search">
      <li class="li_a" style="color: lightblue;"><a onclick="document.getElementById('newform8').submit();">Cuisines</a></li>
    </form>
    <form id="newform9" action="review_search.php" method="post">
      <input type="hidden" name="review_search">
      <li class="li_a" style="color: lightblue;"><a onclick="document.getElementById('newform9').submit();">Reviews</a></li>
    </form>
  </ul> 

  <?php  
    if(count($cui_output) > 0){
    for($cnt = 0;$cnt < count($cui_output['rst_id']);$cnt++){?>
      <form method="post" action="restaurant.php">
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <div class="fakeimg" style="height:300px;">
              <button type="hidden" style="background-color: lightblue; border-style:none;
cursor: pointer;" name="<?php echo $cui_output['rst_id'][$cnt]; ?>"><img src="<?php $id=$cui_output['rst_id'][$cnt]; echo "restaurant/$id.jpg"; ?>" alt="r1" width="450" height="260"></button>
            </div>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <div class="fakeimg" style="height:300px;">
              <button type="hidden" style="background-color: lightblue; border-style:none;
cursor: pointer;" name="<?php echo $cui_output['rst_id'][$cnt]; ?>"><h2><b><?php echo $cui_output['rst_name'][$cnt]; ?></b></a></button>
              <br>
              <h4><b><?php echo $cui_output['rst_area'][$cnt]; echo " , "; echo $cui_output['rst_district'][$cnt];
                        echo " , "; echo $cui_output['rst_country'][$cnt]; ?></b></h4>
              <br>
              <br>
              <h4><b><?php echo "Item: ";  echo $cui_output['rst_food'][$cnt]; ?></p></b></h4>
              <h4><b><?php echo "Price: "; echo $cui_output['rst_price'][$cnt]; ?></p></b></h4>
              <h4><b><?php echo "Rating: ";echo $cui_output['rst_rating'][$cnt]; ?></p></b></h4>
            </div>
          </div>
        </div>
      </div>
    </from>


      <?php
    }
  }
  ?>

</body>
</html>