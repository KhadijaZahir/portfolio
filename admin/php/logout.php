<?php
session_start();
//unset : remove all var of session
unset($_SESSION["username"]);
unset($_SESSION["admin_id"]);/* 13/09/20 ($_SESSION["id"]);*/
header("Location:../login/?msg=logout");
