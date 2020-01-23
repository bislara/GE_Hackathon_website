<?php 
include 'db.php';
    
    $page = $_SERVER['PHP_SELF'];
    $sec = "2";
    header("Refresh: $sec; url=$page");
    
    $query1 = "SELECT * FROM users WHERE id = 8";
	$res = mysqli_query($con, $query1);
	$status="";
	if($res)
	{
			$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
			$status = $row['email'];
	}
	echo $status;

    if(!empty($_GET['temp']))
    {
        $command=$_GET['temp'];
        $query = mysqli_query($con,"UPDATE users SET email='$command' WHERE id=8 ");
        // echo(json_encode(array("command"=>$command,"name"=>$name)));
        echo $command;   
    }
    else if(!empty($_POST['limit']))
    {
        $status=$_POST['limit'];
        echo $status;
    }
    else
    {
         // echo(json_encode(array("command"=>"nothing")));
        echo "nothing";
    }
   

?>