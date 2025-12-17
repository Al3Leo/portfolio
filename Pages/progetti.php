<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Alessio Leo</title>
    <meta name="author" content="Alessio Leo">
</head>
<body>

<?php
session_start();

require_once 'sfondo_loop.html';
require_once 'topbar.html';

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} else
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', 0, 2);

if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', 0, 2);
}

if ($lang === 'it') {
    require_once 'progetti_ita.html';
} else {
    require_once 'progetti_en.html';
}
?>
</body>
</html>