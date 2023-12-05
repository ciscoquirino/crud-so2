<?php

// Sample file: Never send your credentials to git

// host
$host = 'http://localhost/crud/';

// db
$db_name = 'crud_example';
$db_host = 'localhost';
$db_user = 'francisco';
$db_pass = '';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
