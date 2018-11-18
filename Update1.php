<!DOCTYPE html>
<html>
    <head>
        <title>UPDATE | RTO MAHARASHTRA</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
    </head>
    <body>
		<?php
			require_once 'loginsql.php';
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn -> connect_error) die ($conn -> connect_error);
			if(isset($_POST['LicenceE'])){
				$LicenceN = $_POST['LicenceN'];
				$LicenceE = $_POST['LicenceE'];
				$LicenceC = $_POST['LicenceC'];
				$LicenceS = $_POST['LicenceS'];
				$IDate = $_POST['IDate'];
				$Aadhaar = $_POST['Aadhaar'];
				$fname = $_POST['fname'];
				$mname = $_POST['mname'];
				$lname = $_POST['lname'];
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
					
				if (isset($_POST['delete']) && isset($_POST['RTO_Code'])) {
					$RTO_Code = $_POST['RTO_Code'];
					$query = "DELETE FROM Licence WHERE Licence_No ='$RTO_Code'";
					$result = $conn->query($query);
					if (!$result) 
						echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
				}
				$query = "INSERT INTO Licence VALUES" . "('$LicenceN', $Aadhaar, '$LicenceS', '$LicenceE', '$LicenceC')";
				$result = $conn->query($query);
				error_log($conn->error);
				$query = "INSERT INTO Driver VALUES" . "($Aadhaar, '$fname', '$mname', '$lname', '$LicenceN')";
				$result = $conn->query($query);
				error_log($conn->error);
				$query = "INSERT INTO Takes_Exam VALUES" . "($Aadhaar, '$RCode', '$EDate', '$EType')";
				$result = $conn->query($query);
				error_log($conn->error);
				$query = "INSERT INTO Issues VALUES" . "('$LicenceN', '$RCode', '$IDate')";
				$result = $conn->query($query);
				error_log($conn->error);
				$query = "INSERT INTO Vehicle VALUES" . "('$VType', '$Company', '$MNumber', '$Insurance', '$Validity', $Aadhaar)";
				$result = $conn->query($query);
				error_log($conn->error);
				$query = "INSERT INTO Registeration_No VALUES" . "('$RID', '$RType', '$RDesc', '$MNumber', '$Insurance', '$RCode')";
				$result = $conn->query($query);
				error_log($conn->error);
			}
		?>
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
					<li><a> </a></li>
                </ul>
            </div>
			<?php 
				$LicenceN = $_POST["LicenceN"];
				
				require_once 'loginsql.php';
				$conn = new mysqli($hn, $un, $pw, $db);
				if ($conn -> connect_error) die ($conn -> connect_error);

				$query = "SELECT 
							Licence.Licence_No, Licence.Licence_Expiry, Licence.Licence_Class, 
							Licence.Licence_State, Issues.Issuing_Date, Licence.Aadhaar_No, 
							Driver.F_Name, Driver.M_Name, Driver.L_Name, 
							Vehicle.Company, Vehicle.Model_No, Vehicle.Vehicle_Type, Vehicle.Insurance_No, Vehicle.Validity, 
							Registeration_No.Reg_ID, Registeration_No.Reg_Type, Registeration_No.RTO_Code, Registeration_No.Reg_Desc, 
							Takes_Exam.Exam_Date, Takes_Exam.Exam_Type 
						From Driver 
							INNER JOIN Licence 
							ON Licence.Licence_No = Driver.Licence_No 
							INNER JOIN Issues 
							ON Issues.Licence_No = Licence.Licence_No 
							INNER JOIN RTO_Branch 
							ON RTO_Branch.RTO_Code = Issues.RTO_Code 
							INNER JOIN Registeration_No 
							ON Registeration_No.RTO_Code = RTO_Branch.RTO_Code 
							INNER JOIN Vehicle 
							ON Vehicle.Insurance_No = Registeration_No.Insurance_No 
							INNER JOIN Takes_Exam 
							ON Takes_Exam.Aadhaar_No = Vehicle.Aadhaar_No 
						WHERE Licence.Licence_No = '$LicenceN'";
						
				$result = $conn -> query($query);
				if (!$result) die ("Database access failed: " . $conn->error);

				$result->data_seek(1);
				$row = $result->fetch_array(MYSQLI_NUM);
				$LicenceE = $row[1];
				$LicenceC = $row[2];
				$LicenceS = $row[3];
				$IDate = $row[4];
				$Aadhaar = $row[5];
				$fname = $row[6];
				$mname = $row[7];
				$lname = $row[8];
				$Company = $row[9];
				$MNumber = $row[10];
				$VType = $row[11];
				$Insurance = $row[12];
				$Validity = $row[13];
				$RID = $row[14];
				$RType = $row[15];
				$RCode = $row[16];
				$RDesc = $row[17];
				$EDate = $row[18];
				$EType = $row[19];
				
			?>
            <div id="content">
                <div>
                    <h3>Update an Existing Entry</h3>
					<div>
					<form action = " " method = "post">
						<h2> Licence </h2>
						<table>
							<tr>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Licence Number:</td>
							</tr>
  							<tr>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $LicenceN ?>" name = "LicenceN"/></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Licence Expiry:</td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Licence Class:</td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Licence State:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $LicenceE ?>" name = "LicenceE"/></td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $LicenceC ?>" name = "LicenceC"/></td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $LicenceS ?>" name = "LicenceS"/></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Issuing Date:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "date" value = "<?php echo $IDate ?>" name = "IDate" required /></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Aadhaar Number:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $Aadhaar ?>" name = "Aadhaar"/></td>
							</tr>
						</table>
					<h2> Driver </h2>
						<table>
  							<tr>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">First Name:</td>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Middle Name:</td>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Last Name:</td>
							</tr>
							<tr>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $fname ?>" name = "fname"/></td>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $mname ?>" name = "mname"/></td>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $lname ?>" name = "lname"/></td>
							</tr>
						</table>
					<h2> Vehicle </h2>
						<table>
  							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Company:</td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Model Number:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $Company ?>" name = "Company"/></td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $MNumber ?>" name = "MNumber"/></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Vehicle type:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $VType ?>" name = "VType"/></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Insurance Number:</td>
								<td style = "padding-topMH0420140063458: 5px; padding-bottom: 5px; padding-right: 5px">Validity:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $Insurance ?>" name = "Insurance"/></td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "date" value = "<?php echo $Validity ?>" name = "Validity" required/></td>
							</tr>
						</table>
					<h2> Vehicle Registeration </h2>
						<table>
  							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Registeration ID:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $RID ?>" name = "RID"/></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Registeration Type:</td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">RTO Code:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $RType ?>" name = "RType"/></td>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $RCode ?>" name = "RCode"/></td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Registeration Description:</td>
							</tr>
							<tr>
								<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $RDesc ?>" name = "RDesc"/></td>
							</tr>
						</table>
					<h2> Exam Details </h2>
						<table>
  							<tr>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Exam Date:</td>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px">Exam Type:</td>
    						</tr>
							<tr>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "date" value = "<?php echo $EDate ?>" name = "EDate"/></td>
    							<td style = "padding-top: 5px; padding-bottom: 5px; padding-right: 5px"><input type = "text" value = "<?php echo $EType ?>" name = "EType"/></td>
    						</tr>
						</table>
						<br>
						<input type = "hidden" name = "delete" value = "yes">
						<input type = "hidden" name = "RTO_Code" value = '<?php echo $LicenceN; ?>'> 
						<input type = "submit" value = "UPDATE">			
					</form>
					</div>
                </div>
            </div>
           <div id="footer">
				<div>
					<div class="section">
						<ul>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>