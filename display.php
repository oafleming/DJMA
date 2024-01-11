<?php
// Include the file containing the database connection configuration
include('db.php');

// SQL query to select all records from the 'music' table
$sql = "SELECT * FROM music";

// Execute the SQL query and store the result in the $result variable
$result = $conn->query($sql);

// Check if there are rows returned from the query
if ($result->num_rows > 0) {
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        // Display information for each row (ID, Artist, Title)
        echo "ID: " . $row["id"]. " - Artist: " . $row["artist"]. " - Title: " . $row["title"]. "<br>";
    }
} else {
    // If no results are found, display a message
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
