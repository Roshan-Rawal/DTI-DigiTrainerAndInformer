<?php
$db_host="localhost";
$db_name="tutorial";
$db_user="root";
$db_password="root";

$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());

function newuser()
{
	$user=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="insert into user_info (username,password,email_id) values('$user','$password','$email')";
	$data=mysql_query($query) or die("failed to insert data into database ".mysql_error());
	
	if($data)	{
		echo "Your Registration is successfull";
	}
}
function sign_up()
{
// 	newuser();
	echo "enter into sign_up";
	if(!empty($_POST['username']))
	{
		$query="select * from user_info where username='$_POST[username]' AND pass='$_POST[password]'"
		if(!$row=mysql_fetch_array($query) or die (mysql_error()))	{
			newuser();
			return 1;
		}
		else{
			echo "This is user is already exist";
			return 0;
		}
	}
}
if(sign_up()) {
	echo "user created !!";
}
echo "1";

?>