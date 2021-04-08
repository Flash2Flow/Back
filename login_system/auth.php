<?php

//include module
require "./db/db.php";

//global variable
$data = $_POST;

//if press button auth
if( isset($data['submit_auth']))
{
//cheack user for true, errors list
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if( $user )
	{
		if( password_verify($data['password'], $user->password) )
		{
			$_SESSION['logged_user'] = $user;
			echo '<div style="color: green;">Аuthorization complited</div><hr>';
		} else
		{
			$errors[] = 'Password not true';
		}
	} else
	{
		$errors[] = 'User not found';
	}

	if( ! empty($errors))
	{
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
}
?>
