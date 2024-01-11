<?php
include('db.php');

$artist = $_POST['artist'];
$title = $_POST['title'];
$year = $_POST['year'];
$label = $_POST['label'];
$genre = $_POST['genre'];
$style = $_POST['style'];
$format = $_POST['format'];

$sql = "INSERT INTO music (artist, title, year, label, genre, style, format) 
        VALUES ('$artist', '$title', '$year', '$label', '$genre', '$style', '$format')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
