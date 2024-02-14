<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'kingchobo';

try {
  $conn = new PDO("mysql:host=".$servername.";dbname=".$db, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("set names utf8mb4");
  //echo "DB 연결 성공";
} catch (PDOException $e) {
  echo "Connection failed: ". $e->getMessage();
}