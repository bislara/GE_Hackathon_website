<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {

echo(json_encode(array("status"=>"success","name"=>$_SESSION['user'],"email"=>$_SESSION['email'])));

}
else
{
	echo(json_encode(array("status"=>"failed")));
}

?>