<?php

include '../classes/User.php';

$user=new User;

$user->update($_POST,$_FILES);
// $_POST - collect data from the form
// $_FILES - collect the uploaded image from the form 
?>