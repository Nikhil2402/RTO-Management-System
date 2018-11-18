<!DOCTYPE html>
<html>
    <head>
        <title>UPDATE | RTO MAHARASHTRA</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
    </head>
    <body>
        <div id="page">
            <div id="header">
                <div id="section">
                    <div>
						<img src="images/RTO.png" alt=" " height = 70% width = 70%  />
					</div>
					<font color = 'White' size = 5><br>Commissionerate of Transport<br>
					</font>
					<font color = 'White' size = 3>Department of Port and Transport, Government of Maharashtra
					</font>
                	<span>
						<a href="index.php">Logout</a>
					</span> 
                </div>
                <ul>
					<li><a href="Example.php">Insert a Record</a></li>
					<li><a href="Delete.php">Delete a Record</a></li>
					<li class="current"><a href="Update.php">Update a Record</a></li>
				</ul>
            </div>
            <div id="content">
                <div>
                    <h3>Update A Record</h3>
                    <table id="customers">
  						<tr>
    						<th>Licence No.</th>
    						<th>Aadhaar No.</th>
    						<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Expiry</th>
							<th>Delete Record</th>
  						</tr>
  						<?php
							require_once 'loginsql.php';
							$conn = new mysqli($hn, $un, $pw, $db);
							if ($conn -> connect_error) die ($conn -> connect_error);

							$query = "SELECT Licence.Licence_No, Licence.Aadhaar_No, 
										Driver.F_Name, Driver.M_Name, Driver.L_Name, 
										Licence.Licence_Expiry from Licence INNER JOIN Driver 
										ON Licence.Licence_No = Driver.Licence_No;";

							$result = $conn -> query($query);
							if (!$result) die ("Database access failed: " . $conn->error);
							$rows = $result -> num_rows;
							for ($j = 0 ; $j < $rows ; ++$j) {
								$result->data_seek($j);
								$row = $result->fetch_array(MYSQLI_NUM);
								?>
  								<tr>
    								<td><?php echo $row[0]; ?></td>
    								<td><?php echo $row[1]; ?></td>
    								<td><?php echo $row[2]; ?></td>
									<td><?php echo $row[3]; ?></td>
									<td><?php echo $row[4]; ?></td>
									<td><?php echo $row[5]; ?></td>
									<td>
									<form action = "Update1.php" method = "post">
										<input type = "hidden" name = "delete" value = "yes">
										<input type = "hidden" name = "LicenceN" value = '<?php echo $row[0]; ?>'> 
										<input type = "submit" value = "UPDATE">
									</form>
									</td>
								</tr>
						<?php
								
							}
							$result->close();
							$conn->close();
							function get_post($conn, $var) {
							return $conn->real_escape_string($_POST[$var]);
							}
						?>
					</table>
                </div>
            </div>
           <div id="footer">
				<div>
					<div class="section">
						<ul>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>