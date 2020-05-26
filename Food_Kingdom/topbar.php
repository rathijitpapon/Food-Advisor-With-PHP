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
</head>
<body>
  <ul>
    <li><a href="#">Food Kingdom</a></li>
    <li><a href="#">Top Restaurants</a></li>
    <li><a href="#">Top Reviews</a></li>
    <li><a href="#">My Profile</a></li>
    <li style="float:right"><a href="index.php">Log Out</a></li>
    <form class="form_class" style="float: right;" method="post" action="">
      <input id="search" type="text" placeholder="Search..." value="<?php echo $src_txt;?>" name="search">
      <button id="submit" type="submit" name="search-icon"><i class="fa fa-search"></i></button>
    </form>
  </ul>

</body>
</html>