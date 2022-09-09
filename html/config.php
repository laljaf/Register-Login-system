<?php

$db_user= "root";
$db_password= "28Octobre199@";
$db_name = "accounts";

$db= new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






