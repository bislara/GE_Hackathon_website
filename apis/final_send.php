<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


//Creating Array for JSON response
$response = array();
 
include 'db.php';

// if($_GET['id'])
// {
    // $id=$_GET['id'];
 // Fire SQL query to get all data from led
$result = mysqli_query($conn,"SELECT *FROM fingers") or die(mysqli_error());
 
// Check for succesfull execution of query and no results found
if (mysqli_num_rows($result) > 0) {
    
	// Storing the returned array in response
    $response["fingers"] = array();
 
	// While loop to store all the returned response in variable
    while ($row = mysqli_fetch_array($result)) {
        // temperoary user array
        $led = array();
        $led["id"] = $row["fin_no"];
        $led["status"] = $row["status"];

		// Push all the items 
        array_push($response["fingers"], $led);
    }
    // On success
    $response["success"] = 1;
 
    // Show JSON response
    // echo json_encode(array('data1'=>'a'));
    echo json_encode($response);
    // echo "no data";
}	
else 
{
    // If no data is found
	$response["success"] = 0;
    $response["message"] = "No data on LED found";
 
    // Show JSON response
    echo json_encode($response);
}    
// }

?>