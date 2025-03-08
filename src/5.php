 <?php
// Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'yourusername');
define('DB_PASSWORD', 'yourpassword');
define('DB_NAME', 'yourdbname');

// Create database connection
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(64) NOT NULL
)";

// Create table
if (mysqli_query($db, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}
?>