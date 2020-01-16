<?php

$_SESSION['login']=0;
session_start();

// remove all session variables
session_unset();
// destroy the session
session_destroy();

header('Location: ../index.html');

?>
