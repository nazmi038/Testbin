<?php

if(isset($_POST['submit']))  {
    $emailbody = 'First Name :'.$_POST['firstname']."\n"
	.'Last Name:'.$_POST['lastname']."\n"
	.'E-mail:'.$_POST['email']."\n"
	.'Gender:'.$_POST['gender']."\n"
	.'Contact Number:'.$_POST['telno']."\n"
	.'password:'.$_POST['password']."\n"
	mail('nazmi95.nn@gmail.com','Subject line',$emailbody);
	header('location:Home.html');
	} else {
    header('location: Home.html');
?>
