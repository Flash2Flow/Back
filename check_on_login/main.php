<?php
require './db/db.php';

if( isset($_SESSION['logged_user'])) {
echo $_SESSION['logged_user']->login;
}
else
{
header('Location: /');
}
?>
