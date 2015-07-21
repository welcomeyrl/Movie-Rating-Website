<?php
session_start();
unset($_SESSION['signup_id']);
session_destroy();

header('Location: login_regis.html');
?>