<?php

include "../classes/User.php";

//create user object
$user_obj = new User;

$user_obj->login($_POST);