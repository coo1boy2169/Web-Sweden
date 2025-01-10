<?php
 require_once '../source/config.php';
 require_once SOURCE_ROOT . 'database.php';
 $connection = database_connect();

// Controleer verbinding
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Haal gegevens van Unity op
if (isset($_POST['username']) && isset($_POST['score'])) {
    $username = $_POST['username'];
    $score = $_POST['score'];

    // Voer de SQL-query uit
    $sql = "INSERT INTO scores (username, score) VALUES ('$username', '$score')";
    if ($connection->query($sql) === TRUE) {
        echo "Data successfully inserted";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
} else {
    echo "No data received";
}

$connection->close();
?>
