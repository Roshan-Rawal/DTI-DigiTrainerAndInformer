<?php
ob_start();  


$db_host="localhost";
$db_name="dti";
$db_user="root";
$db_password="root";
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());
	
	$table="user";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];;
	$email=$_POST['email'];;
	$password=$_POST['password'];;
	$query="insert into $table (fname,lname,contact,email,password) values('$fname','$lname','$contact','$email','$password')";
	$data=mysql_query($query) or die("failed to insert data into database ".mysql_error());


mysql_close($con);

?>
<!-- header -->
<?php include 'header.php'; ?> 


				<!-- Main -->
					<div id="main">
						<br>
						<center>
						<h1>Congralutaions!</h1>
						<br>
						<h2>You successfully regsitered </h2>
						</center>
						<br>
					</div>

<!-- footer -->
<?php include 'footer.php'; ?>
