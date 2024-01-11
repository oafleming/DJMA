<?php
include('db.php');

// Check if an ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query the database to retrieve the record with the given ID
    $sql = "SELECT * FROM music WHERE id = $id";
    $result = $conn->query($sql);

    // Check if a record is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Data for pre-filling the update form
        $artist = $row['artist'];
        $title = $row['title'];
        $year = $row['year'];
        $label = $row['label'];
        $genre = $row['genre'];
        $style = $row['style'];
        $format = $row['format'];
    } else {
        // Redirect to manage.php if the record is not found
        header("Location: manage.php");
        exit();
    }
} else {
    // Redirect to manage.php if no ID is provided
    header("Location: manage.php");
    exit();
}

// Handle form submission for updating the record
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated values from the form
    $updatedArtist = $_POST['artist'];
    $updatedTitle = $_POST['title'];
    $updatedYear = $_POST['year'];
    $updatedLabel = $_POST['label'];
    $updatedGenre = $_POST['genre'];
    $updatedStyle = $_POST['style'];
    $updatedFormat = $_POST['format'];

    // Update the record in the database
    $updateSql = "UPDATE music SET 
                  artist = '$updatedArtist', 
                  title = '$updatedTitle', 
                  year = '$updatedYear', 
                  label = '$updatedLabel', 
                  genre = '$updatedGenre', 
                  style = '$updatedStyle', 
                  format = '$updatedFormat' 
                  WHERE id = $id";

    if ($conn->query($updateSql) === TRUE) {
        // Redirect to manage.php after successful update
        header("Location: manage.php");
        exit();
    } else {
        // Display an error message if the update fails
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Update Record</h2>

    <!-- Update Form -->
    <form action="" method="post">
        <label for="artist">Artist:</label>
        <input type="text" name="artist" value="<?php echo $artist; ?>" required>

        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>

        <label for="year">Year:</label>
        <input type="text" name="year" value="<?php echo $year; ?>">

        <label for="label">Label:</label>
        <input type="text" name="label" value="<?php echo $label; ?>">

        <label for="genre">Genre:</label>
        <input type="text" name="genre" value="<?php echo $genre; ?>">

        <label for="style">Style:</label>
        <input type="text" name="style" value="<?php echo $style; ?>">

        <label for="format">Format:</label>
        <input type="text" name="format" value="<?php echo $format; ?>">

        <input type="submit" value="Update">
    </form>
</body>
</html>
