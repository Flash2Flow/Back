<?php

//include module
require './db/db.php';

//delete save session
unset($_SESSION['logged_user']);

//redirection on main page
header('Location: /')

?>
