<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
	  <title>Food Kingdom</title>
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 410px;
    top: 55px;
    width: 35%;
    height: 70%;
    overflow: auto;
    background-color: white;
    border-radius: 10%;
}


.modal-content {
	background-image: url(su.jpg);
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

<body>
	<img src="food1.jpg" alt="food1" style="width:420px;height:242px;"></a>
	<img src="food2.jpg" alt="food2" style="width:420px;height:242px;">
	<img src="welcome.jpg" alt="food3" style="width:420px;height:242px;">
	<img src="food4.jpg" alt="food4" style="width:420px;height:242px;">

	<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:420px; height: 242px;"><img src="food9.jpg" alt="foodkingdom" style="width: 420px; height: 242px"></button>

	<img src="food5.jpg" alt="food5" style="width:420px;height:242px;">
	<img src="food6.jpg" alt="food6" style="width:420px;height:242px;">
	<img src="food7.jpg" alt="food7" style="width:420px;height:242px;">
	<img src="food8.jpg" alt="food8" style="width:420px;height:242px;">


	<div id="modal-wrapper" class="modal animate">
		<form action="login.php">
			<div class="form-group">
		      <button type="submit" class="btn btn-primary btn-block btn-lg"><b>Enter As Customer</b></button>
		    </div>
	    </form>
	    <form action="login_owner.php">
		    <div class="form-group">
		      <button type="submit" class="btn btn-primary btn-block btn-lg"><b>Enter As Restaurant Owner</b></button>
		    </div>
	    </form>
	</div>

	<script>
	// If user clicks anywhere outside of the modal, Modal will close

	var modal = document.getElementById('modal-wrapper');
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>
</body>
</html>