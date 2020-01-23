<?php 
include 'db.php';



    if(!empty($_POST['data']))
    {
        $command=$_POST['data'];

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
