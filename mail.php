<?php
$message = ""; 
if(isset($_POST['submit'])){
	$to = "info@nexushomes.in"; 
	$name = $_POST['name'];
  $phone = $_POST['phone'];
	$from = $_POST['email'];  
  $city = $_POST['city'];	
	$message = "<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
    <tr style='background: #eee;'><td colspan='2'><strong>Enquiry User Details</strong> </td></tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>".$_POST['name']."</td>
    </tr>
    <tr>
        <td><strong>Mobile:</strong></td>
        <td>".$_POST['phone']."</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>".$_POST['email']."</td>
    </tr>
    <tr>
        <td><strong>City:</strong></td>
        <td>".$_POST['city']."</td>
    </tr>   
	</table>
	</body>
	</html>";
	
	$subject = "Enquiry User Details";
	
	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$headers .= "From:" . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	if ($result) {
		
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';

		echo '<script type="text/javascript">location.assign("index.php");</script>';		

	}else{
		
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
	   
		echo '<script type="text/javascript">location.assign("index.php");</script>';
	}
	
}
?>