<?php

include_once('database.php');



if (isset($_POST['push'])) {
   


if (empty($_POST['rendu'])) {
    echo "Please enter your project URL";
}

else if (!empty($_POST['rendu'])) {
    $insert = ("INSERT INTO `validation`( `url`) VALUES ('" . $_POST['rendu'] . "')");
    $query =  mysqli_query($link,$insert);
    header('location:student_index.php');
}
}