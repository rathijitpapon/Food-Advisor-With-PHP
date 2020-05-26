<?php require_once 'user_authentication.php'; ?>
<?php
  if(!isset($restaurant) or !isset($restaurant['res_name'])){
    header('LOCATION: Home.php');
    exit();
  }
 ?>
<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <title>Food Kingdom</title>
  <link rel="stylesheet" href="style.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobstar" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}'
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td{
  border: 1px solid #ddd;
  padding: 18px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;
    
}



.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}
.checked {
  color: red;
}



/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 30%;
 
}

/* Right column */
.rightcolumn {
  float: left;
  width: 70%; 
  background-color: #f1f1f1;
  padding-left: 20px;
}


/* Add a card effect for articles */
.card {
  background-color: white;
  
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
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
    <form class="form_class" style="float: right;" method="post" action="restaurant_search.php">
      <input id="search" type="text" placeholder="Search..." value="<?php echo $src_txt;?>" name="search">
      <button id="submit" type="submit" name="search-icon"><i class="fa fa-search"></i></button>
    </form>
  </ul>

<div class="row">
  <div class="leftcolumn" >
    <div class="card" style="padding: 1px;">
      <img src="<?php $id=$_SESSION['res_id']; echo "restaurant/$id.jpg"; ?>" alt "green lounge" width="440" height="250">
    </div>
    <div class="card" style="padding: 20px;">
      <h1>About</h1>
      <p><?php echo $restaurant['about'][0]; ?></p>
      <h1>Features</h1>
      <p><?php echo $restaurant['features'][0]; ?></p>
    </div>
    <div class="card" style="padding: 20px;">
      <h1>Event Update</h1>
      <p>30% discount on friday night!!!!!!</p>
    </div>
    <div class="card" style="padding: 20px;">
      <h3>Over All Rating</h3>
      <?php for($cnt =0;$cnt<(int)$restaurant['ovr'][0];$cnt++) {?>
      <span class="fa fa-star checked" style="font-size: 25px"></span>
      <?php }?>
      <?php for($cnt =0;$cnt<5-(int)$restaurant['ovr'][0];$cnt++) {?>
      <span class="fa fa-star" style="font-size: 25px"></span>
      <?php }?>
      <h3>Food Rating</h3>
      <?php for($cnt =0;$cnt<(int)$restaurant['fdr'][0];$cnt++) {?>
      <span class="fa fa-star checked" style="font-size: 25px"></span>
      <?php }?>
      <?php for($cnt =0;$cnt<5-(int)$restaurant['fdr'][0];$cnt++) {?>
      <span class="fa fa-star" style="font-size: 25px"></span>
      <?php }?>
      <h3>Serviecs</h3>
      <?php for($cnt =0;$cnt<(int)$restaurant['svr'][0];$cnt++) {?>
      <span class="fa fa-star checked" style="font-size: 25px"></span>
      <?php }?>
      <?php for($cnt =0;$cnt<5-(int)$restaurant['svr'][0];$cnt++) {?>
      <span class="fa fa-star" style="font-size: 25px"></span>
      <?php }?>
      <h3>Value Rating</h3>
      <?php for($cnt =0;$cnt<(int)$restaurant['vlr'][0];$cnt++) {?>
      <span class="fa fa-star checked" style="font-size: 25px"></span>
      <?php }?>
      <?php for($cnt =0;$cnt<5-(int)$restaurant['vlr'][0];$cnt++) {?>
      <span class="fa fa-star" style="font-size: 25px"></span>
      <?php }?>
      <br><br>

      <form method="post" action="review_res.php">
        <button type="hidden" style="background-color: #f44336; border-style:none;
cursor: pointer;" name="review_res">
          <a style=" background-color: #f44336;
          color: white;
          padding: 14px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;">Reviews</a>
        </button>
      </form>  

      <br>  <br> 

      <form method="post" action="create_review.php">
        <button type="hidden" style="background-color: #f44336; border-style:none;
cursor: pointer;" name="create_review"> 
        <a style="background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;">Write Review</a>
        </button>
      </form>  <br>  <br>
      
    </div>
  </div>
  <div class="rightcolumn" >
    <div class="card"style="padding: 20px;">
      <h1><?php echo $restaurant['res_name'][0]; ?></h1>
      <p><i class='fas fa-map-marker-alt' style='font-size:32px;color:red'></i><?php echo $restaurant['house'][0]; echo ","; echo $restaurant['road'][0]; echo ","; echo $restaurant['area'][0]; echo ","; echo $restaurant['dis'][0]; echo ","; echo $restaurant['country'][0]; ?></p>
      <p><i class="material-icons" style="font-size:24px">call</i><?php echo $restaurant['contact'][0]; ?></p>
      <p><i class="fa fa-globe" aria-hidden="true"  style="font-size:24px;color:green"></i><a href="<?php echo $restaurant['website'][0]; ?>"><?php echo $restaurant['website'][0]; ?></a></p>
    </div>
    <?php if(count($restaurant)) {?>
    <div class="card"style="padding: 20px;">
      <?php for($cnt = 0;$cnt<count($restaurant['cuisine_name']);$cnt++){
        if($cnt==0 || $restaurant['cuisine_name'][$cnt-1] != $restaurant['cuisine_name'][$cnt]){ ?>
          <h1><?php echo $restaurant['cuisine_name'][$cnt]; ?></h1>
          <table id="customers" width="700">
            <?php for($id = $cnt;$id<count($restaurant['cuisine_name']);$id++){ 
                if($restaurant['cuisine_name'][$cnt] == $restaurant['cuisine_name'][$id]){?>
              <tr>
                <td><?php echo $restaurant['food_name'][$id]; ?></td>
                <td><?php echo $restaurant['price'][$id]; ?></td>
              </tr>
            <?php }} ?>
          </table> 
          <br>
        <?}}?>
    </div>
  <?php }?>
  </div>
</div>



</body>
</html>