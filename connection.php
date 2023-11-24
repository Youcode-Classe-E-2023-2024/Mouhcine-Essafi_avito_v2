<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avito2_database";
$table_annonces = "annonces";
$table_users= "users";


/**
 * Create connection (MySQLi Procedural)
 */
$conn = mysqli_connect($servername, $username, $password);

/**
 * Check connection
 */
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

/**
 * SQL query to create a database
 */
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!$conn->query($sql) === TRUE) {
    echo "Error creating database: " . $conn->error;
}

/**
 * Select your database
 */
$conn->select_db($dbname);

/**
 * create a table
 */

 $sql2 = "CREATE TABLE IF NOT EXISTS $table_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    role VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";

$sql1 = "CREATE TABLE IF NOT EXISTS $table_annonces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    phonenumber VARCHAR(20) NOT NULL,
    title VARCHAR(30) NOT NULL,
    about TEXT NOT NULL,
    price INT NOT NULL,
    img TEXT NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id)
)";

if (!$conn->query($sql2) || !$conn->query($sql1)) {
    echo "Error creating table: " . $conn->error;
}

?>
