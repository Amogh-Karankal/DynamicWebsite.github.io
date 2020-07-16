<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "Connection not Successful";
}

mysqli_select_db($con, 'contact_userinfo');

$user = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfo(username,email,mobileno,comment)
			VALUES('$user','$email', '$mobile', '$comment')";

// echo $query;

mysqli_query($con, $query);
header('location:index.php');





 ?>