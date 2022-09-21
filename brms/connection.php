<?php

$dsn = 'mysql:host=localhost;dbname=adminaccount';
$username = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
try{
$conn = new PDO($dsn, $username, $password, $options);
// set the PDO error mode
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '';
} catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}

?>