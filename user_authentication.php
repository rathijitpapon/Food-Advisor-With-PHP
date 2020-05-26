<?php
	session_start();
	require 'db.php';

	$errors = array();
	//Global::$user_id = 0;
	$username = "";
	$email = "";
	$food_output = array();
	$res_output = array();
	$cui_output = array();
	$rvw_output = array();
	$restaurant = array();
	$src_txt = "";

	if(isset($_POST['signup-btn'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$repeat = $_POST['repeat'];

		$profileImageName = time() . '-' . $_FILES['profileImage']['name'];
	    $target_dir = "profile/";
	    $target_file = $target_dir . basename($profileImageName);

		if(empty($username)){
			$errors['username'] = "Username Required!";
		}

		elseif(empty($email)){
			$errors['email'] = "Email Required!";
		}

		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "Email is Invalid!";
		}

		elseif(empty($password)){
			$errors['password'] = "Password Required!";
		}

		elseif($password != $repeat){
			$errors['password'] = "Passwords don't Match!";
		}
	    
	    elseif(file_exists($target_file)) {
	      $errors['image'] = "File already exists";
	    }

		elseif(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target_file)){
			$res = pg_query($db,"select * from \"Food Advisor\".\"Sign_up\"('$username','$email','$password',1,'$contact','$profileImageName')");
			$id = 0;
			while ($row = pg_fetch_row($res)) {
				$id = $row[0];
			}

			$_SESSION['profileImageName'] = $profileImageName;

			if($id == -1){
				$errors['email'] = "Email Already Exists!";
			}
			else{
				$verified = true;
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['contact'] = $contact;
				$_SESSION['password'] = $password;
				$_SESSION['verified'] = $verified;
				$_SESSION['message'] = "You are Logged In!!";
				$_SESSION['alert-class'] = "alert-success";
				header('location: confirmation.php');
				//exit();
			}
		}

	}


	if(isset($_POST['signin-btn'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email)){
			$errors['email'] = "Email Required!";
		}

		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "Email is Invalid!";
		}

		elseif(empty($password)){
			$errors['password'] = "Password Required!";
		}

		else{

			$res = pg_query($db,"select * from \"Food Advisor\".\"Log_in\"('$email','$password',1)");
			$id = 0;
			while ($row = pg_fetch_row($res)) {
				$id = $row[0];
			}

			if($id == -1){
				$errors['login_fail'] = "Wrong Email or Password!!";
			}
			else{
				$verified = true;
				$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Profile\"($id,1)");

				while ($row = pg_fetch_row($res)) {
					$username = $row[0];
					$email = $row[1];
					$contact = $row[2];
					$password = $row[3];
					$profileImageName = $row[4];
				}

				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['contact'] = $contact;
				$_SESSION['password'] = $password;
				$_SESSION['profileImageName'] = $profileImageName;
				$_SESSION['verified'] = $verified;
				$_SESSION['message'] = "You are Logged In!!";
				$_SESSION['alert-class'] = "alert-success";
				header('location: confirmation.php');
				//exit();
			}
		}

	}


	if(isset($_POST['signup-btn-owner'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$repeat = $_POST['repeat'];

		if(empty($username)){
			$errors['username'] = "Username Required!";
		}

		elseif(empty($email)){
			$errors['email'] = "Email Required!";
		}

		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "Email is Invalid!";
		}

		elseif(empty($password)){
			$errors['password'] = "Password Required!";
		}

		elseif($password != $repeat){
			$errors['password'] = "Passwords don't Match!";
		}

		else{
			$res = pg_query($db,"select * from \"Food Advisor\".\"Sign_up\"('$username','$email','$password',2,'$contact')");
			$id = 0;
			while ($row = pg_fetch_row($res)) {
				$id = $row[0];
			}

			if($id == -1){
				$errors['email'] = "Email Already Exists!";
			}
			else{
				$verified = $false;
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['contact'] = $contact;
				$_SESSION['password'] = $password;
				$_SESSION['verified'] = $verified;
				$_SESSION['message'] = "You are Logged In!!";
				$_SESSION['alert-class'] = "alert-success";
				header('location: confirmation.php');
				//exit();
			}
		}

	}


	if(isset($_POST['signin-btn-owner'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email)){
			$errors['email'] = "Email Required!";
		}

		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = "Email is Invalid!";
		}

		elseif(empty($password)){
			$errors['password'] = "Password Required!";
		}

		else{

			$res = pg_query($db,"select * from \"Food Advisor\".\"Log_in\"('$email','$password',2)");
			$id = 0;
			while ($row = pg_fetch_row($res)) {
				$id = $row[0];
			}

			if($id == -1){
				$errors['login_fail'] = "Wrong Email or Password!!";
			}
			else{
				$verified = $false;
				$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Profile\"($id,2)");

				while ($row = pg_fetch_row($res)) {
					$username = $row[0];
					$email = $row[1];
					$contact = row[2];
					$password = row[3];
				}

				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['contact'] = $contact;
				$_SESSION['password'] = $password;
				$_SESSION['verified'] = $verified;
				$_SESSION['message'] = "You are Logged In!!";
				$_SESSION['alert-class'] = "alert-success";
				header('location: confirmation.php');
				//exit();
			}
		}

	}


	if(isset($_POST['search-icon']) || isset($_POST['food_search'])){
		if(isset($_POST['search']))
			$src_txt = $_POST['search'];
		else if(isset($_SESSION['search']))
			$src_txt = $_SESSION['search'];
		else
			$src_txt = "";
		$_SESSION['search'] = $src_txt;
		$new_txt = $src_txt;
		$res = pg_query($db,"select * from \"Food Advisor\".\"Food_Search\"('%$new_txt%')");
		$food_output['res_name'] = array();
		$food_output['country'] = array();
		$food_output['district'] = array();
		$food_output['area'] = array();
		$food_output['food_name'] = array();
		$food_output['price'] = array();
		$food_output['rating'] = array();
		$food_output['res_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$food_output['res_name'][$cnt] = $row[0];
			$food_output['country'][$cnt] = $row[1];
			$food_output['district'][$cnt] = $row[3];
			$food_output['area'][$cnt] = $row[4];
			$food_output['food_name'][$cnt] = $row[5];
			$food_output['price'][$cnt] = $row[6];
			$food_output['rating'][$cnt] = $row[7];
			$food_output['res_id'][$cnt] = $row[8];
			$cnt++;
		}

		$_SESSION['food'] = "FOOD IS ALWAYS LOVE";

		//header('location: food_search.php');
		//exit();
	}

	if(isset($_POST['search-icon']) || isset($_POST['restaurant_search'])){
		if(isset($_POST['search']))
			$src_txt = $_POST['search'];
		else if(isset($_SESSION['search']))
			$src_txt = $_SESSION['search'];
		else
			$src_txt = "";
		$_SESSION['search'] = $src_txt;
		$new_txt = $src_txt;
		$res = pg_query($db,"select * from \"Food Advisor\".\"Restaurant_Search\"('%$new_txt%')");
		$res_output['restaurant_name'] = array();
		$res_output['lcountry'] = array();
		$res_output['ldistrict'] = array();
		$res_output['larea'] = array();
		$res_output['rating'] = array();
		$res_output['restaurant_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$res_output['restaurant_name'][$cnt] = $row[0];
			$res_output['lcountry'][$cnt] = $row[1];
			$res_output['ldistrict'][$cnt] = $row[2];
			$res_output['larea'][$cnt] = $row[3];
			$res_output['lrating'][$cnt] = $row[4];
			$res_output['restaurant_id'][$cnt] = $row[5];
			$cnt++;
		}

		//header('location: restaurant_search.php');
		//exit();
	}

	if(isset($_POST['search-icon']) || isset($_POST['cuisine_search']) || isset($_SESSION['cuisine_search'])){
		if(isset($_POST['search']))
			$src_txt = $_POST['search'];
		else if(isset($_SESSION['search']))
			$src_txt = $_SESSION['search'];
		else
			$src_txt = "";
		$_SESSION['search'] = $src_txt;
		$new_txt = $src_txt;
		$res = pg_query($db,"select * from \"Food Advisor\".\"Cuisine_Search\"('%$new_txt%')");
		$cui_output['rst_name'] = array();
		$cui_output['rst_food'] = array();
		$cui_output['rst_country'] = array();
		$cui_output['rst_district'] = array();
		$cui_output['rst_area'] = array();
		$res_output['rst_price'] = array();
		$cui_output['rst_rating'] = array();
		$cui_output['rst_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$cui_output['rst_name'][$cnt] = $row[0];
			$cui_output['rst_food'][$cnt] = $row[1];
			$cui_output['rst_country'][$cnt] = $row[2];
			$cui_output['rst_district'][$cnt] = $row[3];
			$cui_output['rst_area'][$cnt] = $row[4];
			$cui_output['rst_price'][$cnt] = $row[5];
			$cui_output['rst_rating'][$cnt] = $row[6];
			$cui_output['rst_id'][$cnt] = $row[7];
			$cnt++;
		}

		//header('location: restaurant_search.php');
		//exit();
	}

	if(isset($_POST['search-icon']) || isset($_POST['review_search'])){
		if(isset($_POST['search']))
			$src_txt = $_POST['search'];
		else if(isset($_SESSION['search']))
			$src_txt = $_SESSION['search'];
		else
			$src_txt = "";
		$_SESSION['search'] = $src_txt;
		$new_txt = $src_txt;
		$res = pg_query($db,"select * from \"Food Advisor\".\"Review_Search\"('%$new_txt%')");
		$rvw_output['cus_name'] = array();
		$rvw_output['rv_rs_name'] = array();
		$rvw_output['rvw_text'] = array();
		$rvw_output['recom'] = array();
		$rvw_output['ffor'] = array();
		$rvw_output['prc'] = array();
		$rvw_output['laik'] = array();
		$rvw_output['nlaik'] = array();
		$rvw_output['rvw_id'] = array();
		$rvw_output['cus_id'] = array();
		$rvw_output['rv_rs_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$rvw_output['cus_name'][$cnt] = $row[0];
			$rvw_output['rv_rs_name'][$cnt] = $row[1];
			$rvw_output['rvw_text'][$cnt] = $row[2];
			$rvw_output['recom'][$cnt] = $row[3];
			$rvw_output['ffor'][$cnt] = $row[4];
			$rvw_output['prc'][$cnt] = $row[5];
			$rvw_output['laik'][$cnt] = $row[6];
			$rvw_output['nlaik'][$cnt] = $row[7];
			$rvw_output['rvw_id'][$cnt] = $row[8];
			$rvw_output['cus_id'][$cnt] = $row[9];
			$rvw_output['rv_rs_id'][$cnt] = $row[10];
			$cnt++;
		}

		//header('location: restaurant_search.php');
		//exit();
	}

	if(isset($_POST['newsfeed'])){
		$id = $_SESSION['id'];
		$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Review\"($id,1)");
		$rvw_output['cus_name'] = array();
		$rvw_output['rv_rs_name'] = array();
		$rvw_output['rvw_text'] = array();
		$rvw_output['recom'] = array();
		$rvw_output['ffor'] = array();
		$rvw_output['prc'] = array();
		$rvw_output['laik'] = array();
		$rvw_output['nlaik'] = array();
		$rvw_output['rvw_id'] = array();
		$rvw_output['cus_id'] = array();
		$rvw_output['rv_rs_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$rvw_output['cus_name'][$cnt] = $row[0];
			$rvw_output['rv_rs_name'][$cnt] = $row[1];
			$rvw_output['rvw_text'][$cnt] = $row[2];
			$rvw_output['recom'][$cnt] = $row[3];
			$rvw_output['ffor'][$cnt] = $row[4];
			$rvw_output['prc'][$cnt] = $row[5];
			$rvw_output['laik'][$cnt] = $row[6];
			$rvw_output['nlaik'][$cnt] = $row[7];
			$rvw_output['rvw_id'][$cnt] = $row[8];
			$rvw_output['cus_id'][$cnt] = $row[9];
			$rvw_output['rv_rs_id'][$cnt] = $row[10];
			$cnt++;
		}

		//header('location: restaurant_search.php');
		//exit();
	}

	if(isset($_POST['create-restaurant-btn'])){
		$res_name = $_POST['res_name'];
		$country = $_POST['country'];
		$division = $_POST['division'];
		$district = $_POST['district'];
		$area = $_POST['area'];
		$road = $_POST['road'];
		$house = $_POST['house'];
		$contact = $_POST['contact'];
		$web = $_POST['web'];
		$about = $_POST['about'];

		$f1 = ($_POST['self-cooking'] == "Yes") ? "Self Cooking" : "";
		$f2 = ($_POST['reservation'] == "Yes") ? "reservation" : "";
		$f3 = ($_POST['parking'] == "Yes") ? "parking" : "";
		$f4 = ($_POST['alcohol'] == "Yes") ? "alcohol" : "";
		$f5 = ($_POST['credit-card'] == "Yes") ? "credit-card" : "";
		$f6 = ($_POST['free-wifi'] == "Yes") ? "free-wifi" : "";
		$f7 = ($_POST['takeout'] == "Yes") ? "takeout" : "";
		$feature = $f1 . "," . $f2 . "," . $f3 . "," . $f4 . "," . $f5 . "," . $f6 . "," . $f7;

		if(empty($res_name) || empty($country) || empty($division) || empty($district) || empty($road) || empty($house)){
			$errors['res_name'] = "Please fill all the field!";
		}

		elseif(empty($contact) || empty($web) || empty($about)){
			$errors['res_name'] = "Please fill all the field!";
		}

		else{
			$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Location\"('$country','$division','$district','$area','$house','$road')");
			$lid = -1;
			while ($row = pg_fetch_row($res)) {
				$lid = $row[0];
			}

			$_SESSION['OK'] = $lid;
			if($id != -1){
				$res = pg_query($db,"select * from \"Food Advisor\".\"Create_Restaurant\"(1,'$res_name',$lid,'$contact','$web','$feature','$about')");

				header('location: index.php');
				exit();
			}
			else{
				$errors['location'] ="Please give a valid location!";
			}
		}
	}

	if(isset($_POST['create-review-btn'])){
		$rid = $_SESSION['res_id'];
		$cid = $_SESSION['id'];
		$review = $_POST['review'];
		$pricing = $_POST['pricing'];
		$foodfor = $_POST['foodfor'];
		$recommendation = $_POST['recommendation'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		if(empty($review) or strlen($review) < 25){
			$errors['review'] = "Review must has at least 25 letters!";
		}

		elseif(empty($recommendation) or empty($date) or empty($time)){
			$errors['recommendation'] = "Please fill all the field!";
		}

		else{
			if($rid > 0 && $cid > 0){
				$res = pg_query($db,"select * from \"Food Advisor\".\"Create_Review\"($rid,$cid,'$review','$pricing','$foodfor','$recommendation','$date','$time')");

				header('location: top_restaurant.php');
			}
			else{
				$errors['location'] ="Please give a valid location!";
			}

		}
	}

	if(isset($_POST['top_restaurant']) || isset($_POST['home']) || isset($_POST['confirm'])){
		$res = pg_query($db,"select * from \"Food Advisor\".\"Restaurant_Search\"('%')");
		$res_output['restaurant_name'] = array();
		$res_output['lcountry'] = array();
		$res_output['ldistrict'] = array();
		$res_output['larea'] = array();
		$res_output['rating'] = array();
		$res_output['restaurant_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$res_output['restaurant_name'][$cnt] = $row[0];
			$res_output['lcountry'][$cnt] = $row[1];
			$res_output['ldistrict'][$cnt] = $row[2];
			$res_output['larea'][$cnt] = $row[3];
			$res_output['lrating'][$cnt] = $row[4];
			$res_output['restaurant_id'][$cnt] = $row[5];
			$cnt++;
		}

		//header('location: restaurant_search.php');
		//exit();
	}


	if(isset($_POST['top_reviews']) || isset($_POST['home']) || isset($_POST['confirm'])){
		$res = pg_query($db,"select * from \"Food Advisor\".\"Review_Search\"('%')");
		$rvw_output['cus_name'] = array();
		$rvw_output['rv_rs_name'] = array();
		$rvw_output['rvw_text'] = array();
		$rvw_output['recom'] = array();
		$rvw_output['ffor'] = array();
		$rvw_output['prc'] = array();
		$rvw_output['laik'] = array();
		$rvw_output['nlaik'] = array();
		$rvw_output['rvw_id'] = array();
		$rvw_output['cus_id'] = array();
		$rvw_output['rv_rs_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$rvw_output['cus_name'][$cnt] = $row[0];
			$rvw_output['rv_rs_name'][$cnt] = $row[1];
			$rvw_output['rvw_text'][$cnt] = $row[2];
			$rvw_output['recom'][$cnt] = $row[3];
			$rvw_output['ffor'][$cnt] = $row[4];
			$rvw_output['prc'][$cnt] = $row[5];
			$rvw_output['laik'][$cnt] = $row[6];
			$rvw_output['nlaik'][$cnt] = $row[7];
			$rvw_output['rvw_id'][$cnt] = $row[8];
			$rvw_output['cus_id'][$cnt] = $row[9];
			$rvw_output['rv_rs_id'][$cnt] = $row[10];
			$cnt++;
		}

		//header('location: restaurant_search.php');
		//exit();
	}


	if(isset($_POST['home']) || isset($_POST['confirm']) || isset($_POST['cuisines'])){
		$res = pg_query($db,"select * from \"Food Advisor\".\"Cuisine\"");
		$cui_output['cui_name'] = array();
		$cui_output['cui_id'] = array();

		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$cui_output['cui_name'][$cnt] = $row[1];
			$cui_output['cui_id'][$cnt] = $row[0];
			$cnt++;
		}
	}

	for($x=0;$x<=1000;$x++){
		$str = (string)$x;
		if(isset($_POST[$str])){
			$cnt = (int)$str;
			$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Restaurant_Details\"($cnt)");

			$restaurant['cuisine_name'] = array();
			$restaurant['food_name'] = array();
			$restaurant['price'] = array();

			$cnt = 0;
			while ($row = pg_fetch_row($res)) {
				$restaurant['cuisine_name'][$cnt] = $row[0];
				$restaurant['food_name'][$cnt] = $row[1];
				$restaurant['price'][$cnt] = $row[2];
				$cnt++;
			}

			$cnt = (int)$str;
			$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Restaurant_Info\"($cnt)");
			$restaurant['res_name'] = array();
			$restaurant['country'] = array();
			$restaurant['dis'] = array();
			$restaurant['area'] = array();
			$restaurant['road'] = array();
			$restaurant['house'] = array();
			$restaurant['contact'] = array();
			$restaurant['website'] = array();
			$restaurant['about'] = array();
			$restaurant['features'] = array();
			$restaurant['ovr'] = array();
			$restaurant['svr'] = array();
			$restaurant['fdr'] = array();
			$restaurant['vlr'] = array();
	 
			$cnt = 0;
			while ($row = pg_fetch_row($res)) {
				$restaurant['res_name'][$cnt] = $row[0];
				$restaurant['country'][$cnt] = $row[1];
				$restaurant['dis'][$cnt] = $row[2];
				$restaurant['area'][$cnt] = $row[3];
				$restaurant['road'][$cnt] = $row[4];
				$restaurant['house'][$cnt] = $row[5];
				$restaurant['contact'][$cnt] = $row[6];
				$restaurant['website'][$cnt] = $row[7];
				$restaurant['about'][$cnt] = $row[8];
				$restaurant['features'][$cnt] = $row[9];
				$restaurant['ovr'][$cnt] = $row[10];
				$restaurant['svr'][$cnt] = $row[11];
				$restaurant['fdr'][$cnt] = $row[12];
				$restaurant['vlr'][$cnt] = $row[13];
				$cnt++;
			}

			$_SESSION['res_id'] = $x;
			break;
		}
	}


	if(isset($_POST['create_review'])){
		$cnt = $_SESSION['res_id'];
		$res = pg_query($db,"select * from \"Food Advisor\".\"Get_Restaurant_Info\"($cnt)");
		$restaurant['res_name'] = array();
		$cnt = 0;
		while ($row = pg_fetch_row($res)) {
			$restaurant['res_name'][$cnt] = $row[0];
			$cnt++;
		}
	}

	for($cnt = 0;$cnt < 1000;$cnt++){
		if(isset($_POST['$cnt'])){
			$res = pg_query($db,"select * from \"Food Advisor\".\"Cuisine\" C where C.\"Cuisine Id\" = $cnt");
			
			while ($row = pg_fetch_row($res)) {
				$_SESSION['search'] = $row[1];
			}

			break;
		}
	}


	if(isset($_POST['logout'])){
		session_destroy();
		exit();
	}
