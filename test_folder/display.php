<?php
include('db.php');

$sql = "SELECT * FROM music";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Artist: " . $row["artist"]. " - Title: " . $row["title"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
