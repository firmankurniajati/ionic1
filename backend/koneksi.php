<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, HEAD, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, x-requested-with');
header('Content-Type: application/json; charset=utf-8');

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'belajarionic';

$con = mysqli_connect($host, $user, $password, $db) or die("koneksi gagal");
?>