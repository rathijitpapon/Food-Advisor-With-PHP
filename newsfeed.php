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

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: RoyalBlue;
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
    <form class="form_class" style="float: right;" method="post" action="food_search.php">
      <input id="search" type="text" placeholder="Search..." value="<?php echo $src_txt;?>" name="search">
      <button id="submit" type="submit" name="search-icon"><i class="fa fa-search"></i></button>
    </form>
  </ul>

  <ul style="background-color: green">
    <form id="newform6" action="profile.php" method="post">
      <input type="hidden" name="profile">
      <li class="li_a" style="color: lightblue;"><a onclick="document.getElementById('newform6').submit();">Profile</a></li>
    </form>
    <form id="newform7" action="newsfeed.php" method="post">
      <input type="hidden" name="newsfeed" >
      <li class="li_a" style="color: lightblue;"><a onclick="document.getElementById('newform7').submit();">Newsfeed</a></li>
    </form>
  </ul> 

  <?php if(count($rvw_output) > 0){
          for($cnt = 0;$cnt < count($rvw_output['cus_id']);$cnt++){?>
            <div class="row">
              <div class="leftcolumn">
                <div class="card">
                  <div class="fakeimg" style="height:300px;">
                    <img src="<?php
         echo"profile/";echo $_SESSION['profileImageName'];
         ?>" alt="r1" width="475" height="250">
                    <h2 style="margin: 5px 100px 5px;"><b><?php echo $rvw_output['rv_rs_name'][$cnt]; ?></b></h2>
                  </div>
                </div>
              </div>
              <div class="rightcolumn">
                <div class="card">
                  <div class="fakeimg" style="height:300px;">
                    <h1><b><?php echo $rvw_output['cus_name'][$cnt]; ?></b></h1>
                    <br>
                    <p style="font-size: 1.10em; font-family: 'Lora'"><?php echo $rvw_output['rvw_text'][$cnt]; ?></p>
                    <br><br><br>
                    <p style="font-size: 1.0em; font-family: 'Lora'"><?php echo $rvw_output['laik'][$cnt]; echo " likes , "; echo $rvw_output['nlaik'][$cnt]; echo " unlikes"; ?><p>
                    <button class="btn" name="like-btn"><i class="fa fa-thumbs-up"></i> Like</button>
                    <button class="btn" name="unlike-btn"><i class="fa fa-thumbs-down"></i> Unlike</button>
                    <button class="btn" name="comment-btn"><i class="fa fa-comment-o"></i> Comment</button>
                  </div>
                </div>
              </div>
            </div>
      <?php }
    }
  ?>

  
 
</div>


</body>
</html>