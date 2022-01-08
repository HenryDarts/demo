<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$promo    = "CETF/DigitalSDG"; 
$errors = array(); 

// connect to the database
$db = mysqli_connect('eu-cdbr-west-02.cleardb.net', 'bf1972e15424e2', 'a8713055', 'heroku_cda4b9deecff81a');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $user_promo = mysqli_real_escape_string($db, $_POST['promo']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "სახელი აუცილებელია"); }
  if (empty($email)) { array_push($errors, "ელ-ფოსტა აუცილებელია"); }
  if (empty($password_1)) { array_push($errors, "პაროლი აუცილებელია"); }
  if (empty($user_promo)) { array_push($errors, "რეგისტრაციის გასავლელად აუცილებელია პრომო კოდი"); }
  if ($password_1 != $password_2) {
	array_push($errors, "პაროლები არ ემთხვევა ერთმანეთს");
  }
  if ($user_promo != "" && $user_promo != $promo) {
    array_push($errors, "შეყვანილი პრომო კოდი არასწორია");
    }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "სახელი დაკავებულია");
    }

    if ($user['email'] === $email) {
      array_push($errors, "ელ-ფოსტა დაკავებულია");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: articles.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "ელ-ფოსტა აუცილებელია");
  }
  if (empty($password)) {
  	array_push($errors, "პაროლი აუცილებელია");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  header('location: articles.php');
  	}else {
  		array_push($errors, "პაროლი ან ელ-ფოსტა არასწორია");
  	}
  }
}

?>
