<?php

include '../classes/User.php';

// Create an obj
$user=new User;

// Call the method
$user->store($_POST);
// $_POST holds all the data that we collect from the form from views/register.php

?>