<?php include("includes/header.php"); ?>

	<!-- Start login section -->
	<form action="action_page.php" method="post" class="form" style="border: 3px;">		
		<div class="container" style="padding: 60px; text-align: center;">

		    <label for="username"><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="username" required>
		    <br><br>
		    <label for="password"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="password" required>
		    <br><br>
		    <label for="userType"><b>Type of User</b></label>
		    <select name="userType" required>
		    	<option value="Student">Student</option>
		    	<option>Lecturer</option>
		    	<option>Manager</option>
		    	<option>Technician</option>
		    	<option>Administrator</option>
		    </select>
		    <br><br>
		    <label>
		      <input type="checkbox" checked="checked" name="remember"> Remember me
		    </label>
		    <button type="submit">Login</button>
		    <br><br>
		    <a href="register.php">Register </a> 
		    <span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	</form>
		
<?php include("includes/footer.php"); ?>