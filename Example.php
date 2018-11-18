<!DOCTYPE html>
<html>
    <head>
        <title>INSERT | RTO MAHARASHTA</title>
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
					<li class="current"><a href="Example.php">Insert a Record</a></li>
					<li><a href="Delete.php">Delete a Record</a></li>
					<li><a href="Update.php">Update a Record</a></li>
				</ul>
            </div>
            <div id="content">
                <div>
					<br>
                    <h3>Insert A New Entry</h3>
					<div>
						<form action = " " method = "post">
							<h2> Licence </h2>
  							<table>
								<tr>
    								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Licence No." name = "LicenceN"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Licence Expiry" name = "LicenceE"/></td>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Licence Class" name = "LicenceC"/></td>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Licence State" name = "LicenceS"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "date" placeholder = "Issuing Date" name = "IDate" required /></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Aadhaar No." name = "Aadhaar"/></td>
								</tr>
							</table>
							<br>
							<h2> Driver </h2>
							<table>
  								<tr>
    								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "First Name" name = "fname"/></td>
    								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Middle Name" name = "mname"/></td>
    								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Last Name" name = "lname"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Phone Number" name = "PNo"/></td>
								</tr>
							</table>
							<br><br>
							<h2> Vehicle </h2>
							<table>
  								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Company" name = "Company"/></td>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Model Number" name = "MNumber"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Vehicle Type" name = "VType"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Insurance Number" name = "Insurance"/></td>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "date" placeholder = "Validity" name = "Validity" required /></td>
								</tr>
							</table>
							<br><br>
							<h2> Vehicle Registeration </h2>
							<table>
  								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Registeration ID" name = "RID"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Registeration Type" name = "RType"/></td>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "RTO Code" name = "RCode"/></td>
								</tr>
								<tr>
									<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Description" name = "RDesc"/></td>
								</tr>
							</table>
							<br><br>
							<h2> Exam Details </h2>
							<table>
  								<tr>
    								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "date" placeholder = "Exam Date" name = "EDate"/></td>
    								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" placeholder = "Exam Type" name = "EType"/></td>
    							</tr>
							</table>
							<br>
							<button type = "submit"> Insert </button>
						</form>
					</div>
					<?php
						require_once 'loginsql.php';
						$conn = new mysqli($hn, $un, $pw, $db);
						if ($conn -> connect_error) die ($conn -> connect_error);
						if (isset($_POST['LicenceN'])) {
							$LicenceN = $_POST['LicenceN'];
							$LicenceE = $_POST['LicenceE'];
							$LicenceC = $_POST['LicenceC'];
							$LicenceS = $_POST['LicenceS'];
							$IDate = $_POST['IDate'];
							$Aadhaar = $_POST['Aadhaar'];
							$fname = $_POST['fname'];
							$mname = $_POST['mname'];
							$lname = $_POST['lname'];
							$PNo = $_POST['PNo'];
							$Company = $_POST['Company'];
							$MNumber = $_POST['MNumber'];
							$VType = $_POST['VType'];
							$Insurance = $_POST['Insurance'];
							$Validity = $_POST['Validity'];
							$RID = $_POST['RID'];
							$RType = $_POST['RType'];
							$RCode = $_POST['RCode'];
							$RDesc = $_POST['RDesc'];
							$EDate = $_POST['EDate'];
							$EType = $_POST['EType'];

							$query = "INSERT INTO Licence VALUES" . "('$LicenceN', $Aadhaar, '$LicenceS', '$LicenceE', '$LicenceC')";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
							$query = "INSERT INTO Driver VALUES" . "($Aadhaar, '$fname', '$mname', '$lname', '$LicenceN')";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
							$query = "INSERT INTO Driver_Phone_Number VALUES" . "($Aadhaar, '$PNo')";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
							$query = "INSERT INTO Takes_Exam VALUES" . "($Aadhaar, '$RCode', '$EDate', '$EType')";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
							$query = "INSERT INTO Issues VALUES" . "('$LicenceN', '$RCode', '$IDate')";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
							$query = "INSERT INTO Vehicle VALUES" . "('$VType', '$Company', '$MNumber', '$Insurance', '$Validity', $Aadhaar)";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
							$query = "INSERT INTO Registeration_No VALUES" . "('$RID', '$RType', '$RDesc', '$MNumber', '$Insurance', '$RCode')";
							$result = $conn->query($query);
							error_log($conn->error);
							if(mysqli_num_rows($result) > 0) {
								echo "Successfully Logged IN";
							}
						}
					?>
                </div>
            </div>
        <div id="footer">
			<div></div>
		</div>
	</body>
</html>