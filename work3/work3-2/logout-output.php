<?php session_start(); ?>
<?php require 'header.php'; ?>
<link rel="stylesheet" href="styles/logout-input_style.css">
<title>C.C.Donuts | 入力確認</title>
<?php require 'header2.php'; ?>
<?php
if (isset($_SESSION['customers'])) {
    unset($_SESSION['customers']);
    echo 'ログアウトしました。';
} else {
    echo 'すでにログアウトしています。';
}
?>
<?php require 'footer.php'; ?>