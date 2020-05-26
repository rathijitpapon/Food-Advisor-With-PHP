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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
</head>
<style>
  body{
    background-image: url(su.jpg);
    background-size: cover;
    background-repeat: no-repeat;
  }

  #profileDisplay { display: block; height: 210px; width: 60%; margin: 0px auto; border-radius: 50%; }
  .img-placeholder {
    width: 60%;
    color: white;
    height: 100%;
    background: black;
    opacity: .7;
    height: 210px;
    border-radius: 50%;
    z-index: 2;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    display: none;
  }
  .img-placeholder h4 {
    margin-top: 40%;
    color: white;
  }
  .img-div:hover .img-placeholder {
    display: block;
    cursor: pointer;
  }
</style>

<body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div">
          <form action="signup.php" method="post" enctype="multipart/form-data">
            <h3 class="text-center"><b>Register As Customer</b></h3>

            <?php if(count($errors) > 0): ?>
              <div class="alert alert-danger">
                <?foreach ($errors as $error): ?>
                  <li>
                    <?php echo "$error"; ?>
                  </li>
                <?php endforeach; ?>
              </div>
            <?php endif;?>

            <div class="form-group text-center" style="position: relative;" >
              <span class="img-div">
                <div class="text-center img-placeholder"  onClick="triggerClick()">
                  <h4>Update image</h4>
                </div>
                <img src="profile/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
              </span>
              <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
              <label>Profile Image</label>
            </div>

            <div class="form-group">
              <label for="username">User Name</label>
              <input type="text" name="username" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="contact">Contact</label>
              <input type="text" name="contact" class="form-control form-control-lg">
            </div> 

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control form-control-lg">
            </div>            

            <div class="form-group">
              <label for="repeat">Confirm Password</label>
              <input type="password" name="repeat" class="form-control form-control-lg">
            </div>

            <div class="form-group">
              <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
            <p class="text-center">Already a member? <a href="login.php">Sign In</a> </p>
          </form>
        </div>
      </div>
    </div>
</body>
</html>

<script>
  function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>