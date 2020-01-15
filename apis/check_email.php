<?php include 'db.php';
$email=$_POST['email'];
$query_email=mysqli_query($conn,"SELECT * from users where email='$email'");
if(!empty($email)){
	if(mysqli_num_rows($query_email)>0){
		echo " <div style=\"color:red;\">Email Id already exists</div>";
	}
	else {
		echo "<div style=\"color:green;\">You can signup using this email id.</div>";
	}
}else{
	echo "<div style=\"color:red;\">Email field cannot be empty</div>";
}