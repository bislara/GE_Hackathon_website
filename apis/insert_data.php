<?php
include 'db.php';

    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(!empty($_POST['status']) && !empty($_POST['station']))
    {
    	$status = $_POST['status'];
    	$station = $_POST['station'];

	    $sql = "INSERT INTO  (station, status, Date, Time)
		
		VALUES ('".$station."', '".$status."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>