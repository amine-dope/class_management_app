<?php

include_once('database.php');
session_start();






if (isset($_POST["login"])) {

    $user = $_POST['username'];
    $mdp = $_POST['password'];
    $req2 = ("SELECT * FROM formateur WHERE user_name = '$user' and password = '$mdp'");
    $pro2 = mysqli_query($link, $req2);
    $row2 = mysqli_num_rows($pro2);
    $req = ("SELECT * FROM etudiant WHERE user_name = '$user' and password = '$mdp' ");
    $pro = mysqli_query($link, $req);
    $row = mysqli_num_rows($pro);


    if ($row == 0 && $row2 == 0) {
        echo "Quelque chose est incorrect!";
    } elseif ($row == 1) {
        header('location:student_index.html');
    } elseif ($row2 == 1) {
        header('location:prof_index.html');
    }
    // else {
    //     $_SESSION['username'] = $row['username'];
    //     $_SESSION['id'] = $row['id'];

    //     echo "ok";
    // }
}
