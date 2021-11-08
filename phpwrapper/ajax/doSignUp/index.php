<?php
	include '../config/database.php';
	session_start();
		$firstname=$_POST['signup-firstname'];
                $lastname=$_POST['signup-lastname'];
		$company_name=$_POST['signup-company-name'];
                $role_id=$_POST['signup-role'];
                $other_job=$_POST['signup-other-job'];
                $dialcode=$_POST['signup-phone-dialcode'];
		$phone=$_POST['signup-phone'];
		$email=$_POST['signup-email'];
		$password1=$_POST['signup-password'];
		
		$duplicate=mysqli_query($conn,"select * from crud where email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO `crud`( `signup-firstname`, `signup-lastname`, `signup-company-name`, `signup-role`, `signup-other-job`, `signup-phone-dialcode`, `signup-phone`, `signup-email`, `signup-password`) 
			VALUES ('$firstname','$lastname','$company_name','$role_id','$other_job','$dialcode','$phone','$email', '$password1')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}
