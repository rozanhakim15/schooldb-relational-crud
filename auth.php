<?php
// auth.php - Sertakan pada baris PERTAMA di setiap halaman terproteksi
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

function is_admin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function require_admin() {
    if (!is_admin()) {
        http_response_code(403);
        die("403 Access denied. This page is for admins only.");
    }
}
?>