<?php

session_start();
session_destroy();

header("Location : EmployeeLogin.html");
exit();
?>