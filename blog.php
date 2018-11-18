<!DOCTYPE html>
<html>
    <head>
        <title>OFFICES | RTO MAHARASHTRA</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
    </head>
    <body>
        <div id="page">
            <div id="header">
                <div id="section">
                    <div>
						<a href="index.php"><img src="images/RTO.png" alt=" " height = 70% width = 70%  /></a>
					</div>
					<font color = 'White' size = 5><br>Commissionerate of Transport<br>
					</font>
					<font color = 'White' size = 3>Department of Port and Transport, Government of Maharashtra
					</font>
					<span>
						<a href="Login.php">Login Here</a>
					</span> 
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="admissions.php">Driving Licence</a></li>
					<li><a href="training-courses.php">Vehicle Registeration</a></li>
					<li class="current"><a href="blog.php">RTO Office</a></li>
                </ul>
            </div>
            <div id="content">
                <div>
                    <h3>RTO Offices</h3>
                    <table id="customers">
  						<tr>
    						<th>Branch Code</th>
    						<th>Branch Name</th>
    						<th>Branch City</th>
							<th>STD Code</th>
							<th>Branch Ph. No. 1</th>
							<th>Branch Ph. No. 2</th>	
  						</tr>
  						<?php
							require_once 'loginsql.php';
							$conn = new mysqli($hn, $un, $pw, $db);
							if ($conn -> connect_error) die ($conn -> connect_error);
	
							$query = "SELECT DISTINCT 
											RTO_Branch.RTO_Code,
											RTO_Branch.Branch_Name, 
											RTO_Branch.Branch_City, 
											RTO_Branch.STD_Code, 
											(SELECT Branch_Ph_No FROM RTO_Branch_Phone_Number 
												WHERE RTO_Branch.RTO_Code = RTO_Branch_Phone_Number.RTO_Code 
												ORDER BY Branch_Ph_No LIMIT 0,1) Phone_No_1, 
											(SELECT Branch_Ph_No FROM RTO_Branch_Phone_Number 
												WHERE RTO_Branch.RTO_Code = RTO_Branch_Phone_Number.RTO_Code 
												ORDER BY Branch_Ph_No LIMIT 1,1) Phone_No_2 
									   FROM RTO_Branch";

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
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="admissions.php">Driving Licence</a></li>
							<li><a href="training-courses.php">Vehicle Registeration</a></li>
							<li class="last"><a href="blog.php">RTO Office</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>