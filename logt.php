<?php

session_start();
session_unset();
session_destroy();

header("LOCATION: reset-pass.php");
?>