<!DOCTYPE html>
<html>
	<head>
		<title>ADMIN LOGIN | RTO MAHARASHTRA</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
	</head>
	<body>
		<div id="page">
			<div id="header">
				<div id="section">
					<div>
						<a><img src="images/RTO.png" alt=" " height = 70% width = 70%  /></a>
					</div>
					<font color = 'White' size = 5><br>Commissionerate of Transport<br>
					</font>
					<font color = 'White' size = 3>Department of Port and Transport, Government of Maharashtra
					</font>
				<span>
						<a href="index.php">Back to Home Page</a>
					</span>
				</div>
				<ul>
					<li><a></a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
<div class="login-page">
  <div class="form">
    <form class="login-form" action = " " method = "post">
		<ul class="tab-group">
        	<li class="tab"><a href="Login.php">User</a></li>
        	<li class="tab active"><a href="Login2.php">Admin</a></li>
		</ul>
      	<input type="text" placeholder="username" name = "Username"/>
      	<input type="password" placeholder="password" name = "Pass"/>
      	<button type = "submit">login</button>
    	</form>
	  	<br>
	  		<?php
			require_once 'loginsql.php';
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn -> connect_error) die ($conn -> connect_error);
			if (isset($_POST['Username'])&&isset($_POST['Pass'])) {
				$Username = $_POST['Username'];
				$Pass = $_POST['Pass'];
				$query = "SELECT * FROM User WHERE UserID = '$Username' AND Password = '$Pass'";
				$result = $conn->query($query);
				if(mysqli_num_rows($result) > 0) {
					header('location: Example.php');
				}
				else {
					echo "Incorrect Username and Password";
				}
		?> 
		<?php
			} 
		?>
  </div>
</div>