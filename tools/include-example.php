<?php
error_reporting(E_ALL);
$dbconn = new mysqli("localhost", "root", "12345", "cru");
// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
}

$dbconn2 = new mysqli("localhost", "root", "12345", "cru");
// Check connection
if ($dbconn2->connect_error) {
    die("Connection failed: " . $dbconn2->connect_error);
}

require_once __DIR__ . './include/jsonRPCClient.php';
$neko = new jsonRPCClient('http://123:1234@127.0.0.1:6262/');
