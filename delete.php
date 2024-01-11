<?php
include('db.php');

// Check if an ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record with the given ID from the database
    $deleteSql = "DELETE FROM music WHERE id = $id";

    if ($conn->query($deleteSql) === TRUE) {
        // Redirect to manage.php after successful deletion
        header("Location: manage.php");
        exit();
    } else {
        // Display an error message if the deletion fails
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // Redirect to manage.php if no ID is provided
    header("Location: manage.php");
    exit();
}

$conn->close();
?>
