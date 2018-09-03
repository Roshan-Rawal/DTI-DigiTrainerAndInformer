<!-- header -->
<?php include 'header.php'; ?> 


				<!-- Main -->
					
						<div id="main">
							<br>
							<center><h1>Login here </h1></center>
						<form action="login_connection.php" method="post">
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