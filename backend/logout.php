<?php
//logout
session_start();
session_destroy();
header("Location: ../home/index.php");
?>