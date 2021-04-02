<?php

// se connecter à MySQL
$link = mysqli_connect('localhost', 'root', '', 'class_app');

// tester la connexion
if (mysqli_connect_errno()) {
    die('erreur de connexion : ' . mysqli_connect_error());
}
