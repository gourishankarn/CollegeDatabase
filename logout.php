<?php
session_start();
unset($_SESSION['ssn']);
unset($_SESSION['pwd']);

session_destroy();

header("Location: index.html");
exit;
?>
