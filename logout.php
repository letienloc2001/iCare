<?php
session_start();
unset ($_SESSION['email']);
unset($_SESSION['user_type']);
unset($_SESSION['current_page_shop']);
unset($_SESSION['id']);
header("Location: index.php")
?>