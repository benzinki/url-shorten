<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'url_shorten';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
?>