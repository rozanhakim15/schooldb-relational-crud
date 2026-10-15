<?php
// logout.php
session_start();
session_unset();   // Menghapus semua variabel session
session_destroy(); // Menghancurkan session di server

header("Location: login.php");
exit;
?>