<?php
require "header.php";
// Assume the database connection is already established

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Delete query for vraag_id = 5089
    $vraag_id = 4684;

    // SQL query to delete the record from the "vraag" table
    $sql = "DELETE FROM vraag WHERE id = $vraag_id";

    // Execute the query and check if it's successful
    if ($conn->query($sql) === TRUE) {
        echo "Record with vraag_id $vraag_id was deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Stop the script after the query is executed
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Confirmation</title>
</head>
<body>
    <h1>Press to delete</h1>
    
    <!-- Form that triggers the deletion -->
    <form method="POST" onsubmit="return confirm('Are you sure you want to delete vraag with ID 5089?');">
        <button type="submit">Delete vraag</button>
    </form>
</body>
</html>
