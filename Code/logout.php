<?php

if (isset($_POST['LOGOUT'])) {
    session_start();
    session_destroy();
    header("location:login.html");
}



