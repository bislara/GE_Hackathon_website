<?php 
include 'db.php';



    if(!empty($_POST['data1']))
    {
        $command=$_POST['data1'];
        if ($command=="fin 1 open") {
                $query1 = "SELECT * FROM fingers WHERE fin_no = 1";
                $res = mysqli_query($conn, $query1);
                if($res)
                {
                        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        $status = $row['status'];
                        if ($status=='1') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no=1");            
                        }
                        else if ($status=='0') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no=1 ");
                        }
                }
        }
        else if ($command=="fin 2 open") {
             $query1 = "SELECT * FROM fingers WHERE fin_no = 2";
                $res = mysqli_query($conn, $query1);
                if($res)
                {
                        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        $status = $row['status'];
                        if ($status=='1') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no=2");            
                        }
                        else if ($status=='0') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no=2 ");
                        }
                }
        }
        else if ($command=="fin 3 open") {
            $query1 = "SELECT * FROM fingers WHERE fin_no = 3";
                $res = mysqli_query($conn, $query1);
                if($res)
                {
                        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        $status = $row['status'];
                        if ($status=='1') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no=3");            
                        }
                        else if ($status=='0') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no=3");
                        }
                }
        }
        else if ($command=="fin 4 open") {
            $query1 = "SELECT * FROM fingers WHERE fin_no = 4";
                $res = mysqli_query($conn, $query1);
                if($res)
                {
                        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        $status = $row['status'];
                        if ($status=='1') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no=4");            
                        }
                        else if ($status=='0') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no=4 ");
                        }
                }
        }
        else if ($command=="fin 5 open") {
             $query1 = "SELECT * FROM fingers WHERE fin_no = 5";
                $res = mysqli_query($conn, $query1);
                if($res)
                {
                        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        $status = $row['status'];
                        if ($status=='1') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no=5");            
                        }
                        else if ($status=='0') {
                             $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no=5 ");
                        }
                }
        }
        else if ($command=="all close") {
        
            for ($i=1; $i <6 ; $i++) { 
                $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no='$i'");                
            }

        }
        else if ($command=="all open") {
            for ($i=1; $i <6 ; $i++) { 
                $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no='$i'");              
            }
        }
        $query2 = "SELECT * FROM fingers";
        $res1 = mysqli_query($conn, $query2);

        $response["fingers"] = array();
     
        // While loop to store all the returned response in variable
        while ($row = mysqli_fetch_array($res1,MYSQLI_ASSOC)) {
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
        echo json_encode($response);


        // $row1 = mysqli_fetch_array($res1, MYSQLI_ASSOC);

        // echo(json_encode(array("statuses"=>$row1)));
        // echo $row;   
    }
    else if(!empty($_POST['limit']))
    {
           if ($_POST['limit']=="limit crossed") {
                for ($i=1; $i <6 ; $i++) { 
                    $query = mysqli_query($conn,"UPDATE fingers SET status='0' WHERE fin_no='$i'");           
                }               
           }
           else if ($_POST['limit']=="all fine") {
                for ($i=1; $i <6 ; $i++) { 
                    $query = mysqli_query($conn,"UPDATE fingers SET status='1' WHERE fin_no='$i'");           
                }               
           }

        echo $_POST['limit'];
    }
    else
    {
         // echo(json_encode(array("command"=>"nothing")));
        echo "nothing";
    }

?>
