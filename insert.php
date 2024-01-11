<?php
include('db.php');

// Handle form submission for adding a new record
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $artist = $_POST['artist'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $label = $_POST['label'];
    $genre = $_POST['genre'];
    $style = $_POST['style'];
    $format = $_POST['format'];

    // SQL query to insert data into the 'music' table
    $sql = "INSERT INTO music (artist, title, year, label, genre, style, format) 
            VALUES ('$artist', '$title', '$year', '$label', '$genre', '$style', '$format')";

    // Check if the SQL query was executed successfully
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Record added successfully";
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Record</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Add New Record</h2>

    <!-- Display success or error messages -->
    <?php
    if (isset($successMessage)) {
        echo "<p style='color: green;'>$successMessage</p>";
        // Add a link or button to add another record
        echo "<p><a href='insert.php'>Add Another Record</a></p>";
    } elseif (isset($errorMessage)) {
        echo "<p style='color: red;'>$errorMessage</p>";
    }
    ?>

    <!-- Add New Record Form -->
    <form action="" method="post">
        <!-- Your form fields here... -->

        <!-- Input Fields for Artist, Title, Year, Label, Genre, Style, Format -->
        <label for="artist">Artist:</label>
        <input type="text" name="artist" required>

        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="year">Year:</label>
        <input type="text" name="year">

        <label for="label">Label:</label>
        <input type="text" name="label">

        <label for="genre">Genre:</label>
        <input type="text" name="genre">

        <label for="style">Style:</label>
        <input type="text" name="style">

        <label for="format">Format:</label>
        <input type="text" name="format">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
