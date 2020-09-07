<?php
session_start();
//unset : remove all var of session
unset($_SESSION["username"]);
unset($_SESSION["id"]);
header("Location:../login/?msg=logout");
