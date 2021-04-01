<?php

include_once('database.php');


$insert = ("INSERT INTO `validation`( `url`) VALUES ([value-1]");
$query =  mysqli_query($link,$insert);