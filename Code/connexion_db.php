<?php

$link = mysqli_connect('localhost','root','','class_app');

            
if(mysqli_connect_errno()){
    echo 'erreur de connexion : '. mysqli_connect_error();
    die();
}