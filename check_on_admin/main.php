<?php
require '../db/db.php';

$user_active = $_SESSION['logged_user']->login;
$user_active_group = $_SESSION['logged_user']->group;
$user_admin = $_SESSION['logged_user']->admin;

if( isset($_SESSION['logged_user'])) {
    if( $user_admin == 1 ){
      echo $user_active;
    }
    else{
        header('Location: /');
    }
  }
  else
  {
    header('Location: /');
  }
?>
