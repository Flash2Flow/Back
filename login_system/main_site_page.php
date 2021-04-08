<?php

//include module
require './db/db.php';

//if session save, show login
if( isset($_SESSION['logged_user'])) ;

echo $_SESSION['logged_user']->login;

?>
