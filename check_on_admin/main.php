<?php
require '../db/db.php';

$user_active = $_SESSION['logged_user']->login;
$user_active_group = $_SESSION['logged_user']->group;
$user_admin = $_SESSION['logged_user']->admin;

$user = R::findOne('users', 'login = ?', [$user_active]);
if( $user->admin == 1 )
{
echo 'You are admin';
}
else
{
echo 'You are not admin';
} 
?>
