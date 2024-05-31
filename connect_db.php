<?php
$conn = mysqli_init();
$conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
$conn->ssl_set(NULL, NULL, "./ca.pem", NULL, NULL);
$conn->real_connect("security-mysql.mysql.database.azure.com", "admin1", "R7sn7ZgAbOzFDXMJYl", "test");

if ($conn->connect_error) 
{
    die("Connection failed: ". $conn->connect_error);
} 