<?php
//include module
require "rb.php";

//connect database
R::setup( 'mysql:host=localhost;dbname=name',
'user', 'pass' );


//start session on full pages
session_start();
