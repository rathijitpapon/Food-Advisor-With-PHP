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
          <form action="login.php" method="post">
            <h3 class="text-center"><b>Log In As Customer</b></h3>

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
              <label for="email">Email</label>
              <input type="text" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control form-control-lg">
            </div>            

            <div class="form-group">
              <button type="submit" name="signin-btn" class="btn btn-primary btn-block btn-lg">Sign In</button>
            </div>
            <p class="text-center">Doesn't have an account? <a href="signup.php">Sign Up</a> </p>
          </form>
        </div>
      </div>
    </div>
</body>
</html>