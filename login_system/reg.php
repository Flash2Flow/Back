<?php

//include module
require "./db/db.php";

//main variable
$data = $_POST;

//if press button reg
if( isset($data['submit_reg']) )
{

//errors variable list ( login + password )
	$errors = array();
	if( trim($data['login']) == '	' )
	{
		$errors[] = 'Invalid login';
	}

	if( ($data['password']) == '	' )
	{
		$errors[] = 'Invalid password';
	}

//cheak on unique login
	if( R::count('users', "login = ?", array($data['login'])) > 0 )
	{
		$errors[] = 'User with this login already have';
	}

// if error not, create database. If database create, register complited
	if( empty($errors))
	{
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);
		echo '<div style="color: green;">Account created!</div><hr>';
	} else

//if error, show error
	{
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
}


?>
