<?php require_once 'user_authentication.php' ;

if(!isset($_SESSION['verified'])){
  header('location: login.php');
}

?>

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
</head>

<style>
  body{
    background-image: url(su.jpg);
    background-size: cover;
    background-repeat: no-repeat;
  }
</style>

<body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">

          <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class']; ?>">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
              ?>
            </div>
          <?php endif; ?>

          <h3>Welcome, <?php echo $_SESSION['username']; ?>!!</h3>
          <a href="index.php" class="logout"></a>

          <?php if(!$_SESSION['verified']): ?>
            <div class="alert alert-warning">
              You need to verify your account!!
              Please Check your email account and click on the given link!!
              <strong><?php echo $_SESSION['email']; ?></strong>
            </div>
          <?php endif; ?>

          <?php if($_SESSION['verified']): ?>
            <form method="post" action="Home.php">
              <button class="btn btn-block btn-lg btn-primary" name="confirm">I am verified!!</button>
            </form>
          <?php endif; ?>

          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
    </div>
</body>
</html>