<?php
ob_start();  

$flag=0;
$db_host="localhost";
$db_name="dti";
$db_user="root";
$db_password="root";
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());
	
	$table="user";
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$fetch_query="select * from $table";
	$result=mysql_query($fetch_query) or die("Faild to fetch data from the 

	table".mysql_error());
	while($row=mysql_fetch_array($result))
	{
		$mail=$row['email'];
		$password=$row['password'];
		if($mail==$email)
		{
			if($pass==$password)
			{
				$flag=1;
				break;
			}
		}
	}

include 'header.php';	
	if($flag==1)
	{
		echo '<div id="main">
						<br>
						<center>
						<h1>Congralutaions!</h1>
						<br>
						<h2>You successfully Logged in </h2>
						</center>
						<br>
					</div>';
	}
	else
	{
		echo '<div id="main">
						<br>
						<center>
						<h1>Oops!</h1>
						<br>
						<h2>Email or password is wrong </h2>
						</center>
						<br>
					</div>';
	}

include 'footer.php';
mysql_close($con);

?>
<!-- header -->

