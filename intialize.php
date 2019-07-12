<?php 
   include "config.php";
   $sql="CREATE TABLE accinfo{
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50),
dandt TIMESTAMP,
privacy VARCHAR(50)}";
$conn->query($sql);
$sql="CREATE TABLE commets{
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
moviename VARCHAR(30) NOT NULL,
comments VARCHAR(50),
reg_date TIMESTAMP,
videoid VARCHAR(50)}";
$conn->query($sql);
$sql="CREATE TABLE favrt{
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
videoid VARCHAR(50),
reg_date TIMESTAMP}";
$conn->query($sql);
$sql="CREATE TABLE watchlater{
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
video_id VARCHAR(50),
reg_date TIMESTAMP}";
$conn->query($sql);

?>