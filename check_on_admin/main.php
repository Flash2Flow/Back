<?php
require '../db/db.php';

$user_active = $_SESSION['logged_user']->login;

$user = R::findOne('users', 'dev = 1');
if( $user->dev == 1 AND $user->login === $user_active )
{
echo 'You are admin';
}
else
{
echo 'You are not admin';
}
?>
