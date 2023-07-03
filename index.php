<?php
// Connect to the database and perform queries
$host = 'localhost';
$user = 'admin';
$password = '1234';
$database = 'test-docker-db';

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['column_name'] . "<br>";
    }
} else {
    echo "No rows found";
}

$connection->close();
?>
