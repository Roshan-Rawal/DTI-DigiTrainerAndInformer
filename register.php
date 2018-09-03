<!-- header -->
<?php include 'header.php'; ?> 


				<!-- Main -->
					
						<div id="main">
							<br>
							<center><h1>Register here </h1></center>
						<form action="connection.php" method="post">
						    <div class="form-group">
						      <label for="fname">First Name:</label>
						      <input type="text" class="form-control" placeholder="Enter your First name" name="fname">
						    </div>
						    <div class="form-group">
						      <label for="fname">Last Name:</label>
						      <input type="text" class="form-control"  placeholder="Enter your Last name" name="lname">
						    </div>
						    <div class="form-group">
						      <label for="contact">Contact:</label>
						      <input type="text" class="form-control"  placeholder="Enter your Contact" name="contact">
						    </div>
						    <div class="form-group">
						      <label for="email">Email:</label>
						      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						    </div>
						    <div class="form-group">
						      <label for="pwd">Password:</label>
						      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
						    </div>
						    <br>
						    <button type="submit" class="btn btn-default">Submit</button>
					  </form>
					  <br><br>
					</div>
					

<!-- footer -->
<?php include 'footer.php'; ?>