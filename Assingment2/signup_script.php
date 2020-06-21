<?php
$con = mysqli_connect("localhost", "root", "", "bookingcalendar")or die(mysqli_error($con));


  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
$name= mysqli_escape_string($con,filter_input(INPUT_POST, 'name'));
$email= mysqli_escape_string($con,filter_input(INPUT_POST, 'email'));
$password=  MD5(mysqli_escape_string($con,filter_input(INPUT_POST, 'password')));
$contact= mysqli_escape_string($con,filter_input(INPUT_POST, 'contact'));


  $regex_num = "/^[789][0-9]{9}$/";

  $query1 = "SELECT * FROM users WHERE email='" . $email . "'";
  $result = mysqli_query($con, $query1)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  }else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact ."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $user_id;
    header('location: Calendar.php');
  }
?>