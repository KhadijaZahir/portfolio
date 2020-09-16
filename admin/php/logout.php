<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["admin_id"]);
header("Location:../login/?msg=logout");
