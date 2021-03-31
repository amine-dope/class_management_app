<?php

include_once('database.php');
session_start();



if (isset($_POST["login"])) {

    $user = $_POST['username'];
    $mdp = $_POST['password'];

    $req = ("SELECT * FROM etudiant WHERE username = '$user' and motdepasse = '$mdp' ");
    $pro = mysqli_query($link, $req);
    $row = mysqli_num_rows($pro);

    if ($row == 0) {
        echo "Quelque chose est incorrect!";
    } else {
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];

        echo "ok";
    }
}
