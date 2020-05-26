<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: white;
}

/* Header/Blog Title */
.header {
  padding: 10px;
  text-align: center;
  background-color: #ffffe6;
  color: #990000;
}

.header h1 {
  font-size: 50px;
}


/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #660000;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 22px 24px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: white;
  color: #990000;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 100%;
}


/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background:white;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
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

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Food Advisor</h1>
</div>

<div class="topnav">
  <a href="sign up.html"><strong>Sign Up</strong></a>
  <a href="log in.html"><strong>Log In</strong></a>
  <a href="owner sign up.html" style="float:right"><strong>Promote your restaurant</strong></a>
 
</div>

<div class="row">
  <div class="leftcolumn"style="height:600px;">
   
    <img src="food1.jpg" alt="food1" width="325" height="250">
    <img src="food2.jpg" alt="food2" width="325" height="250">
    <img src="food3.jpg" alt="food3" width="325" height="250">
    <img src="food4.jpg" alt="food4" width="325" height="250">
    <img src="food5.jpg" alt="food5" width="325" height="250">
    <img src="food6.jpg" alt="food6" width="325" height="250">
    <img src="food7.jpg" alt="food7" width="325" height="250">
    <img src="food8.jpg" alt="food8" width="325" height="250">
     
    
   
  </div>
  
</div>



</body>
</html>