<?php

session_start(); /* we must call this function before using any session function */
session_destroy();

header('location:../login.php');


?>