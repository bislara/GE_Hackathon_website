<?php
include 'db.php';
  $username=$_POST['name'];
  $password=$_POST['pass'];
  $password_again=$_POST['cpass'];
  $location=$_POST['loc'];
  $email=$_POST['email'];
  $phone_no=$_POST['phone'];
  $age=$_POST['age'];
  $disease=$_POST['disease'];
  if (!empty($username) && !empty($age) && !empty($location) && !empty($password) && !empty($email) && !empty($phone_no) && !empty($disease))
{ 
  if($password==$password_again){
    
    $query1=mysqli_query($conn,"SELECT * from users where email='$email'");
    $count=mysqli_num_rows($query1);
	$query2=mysqli_query($conn,"SELECT * from users where username='$username'");
    $count2=mysqli_num_rows($query2);
    if(mysqli_num_rows($query1)==0){
		if(mysqli_num_rows($query2)==0){

			  
			$password=md5($password);
			   
			$query=mysqli_query($conn,"INSERT INTO users (username,email,location,disease,age,phone, password) values('$username','$email','$location','$disease','$age', '$phone_no', '$password')");
			
			if($query){
				
			  $_SESSION['reg_suc']="You have Successfully registered.";
			  // echo "done";
				echo(json_encode(array("status"=>"registration done")));
			}
			else{
				echo(json_encode(array("status"=>"something wrong")));
			}
		}
		else{
			echo(json_encode(array("status"=>"username exists")));

		}
  }
  else{
			echo(json_encode(array("status"=>"email exists")));

  }
}
  else{
			echo(json_encode(array("status"=>"password not match")));

  }
}else{
			echo(json_encode(array("status"=>"field empty")));
}

mysqli_close($conn);?>