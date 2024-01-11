<?php
include('db.php');

// Retrieve records from the 'music' table
$sql = "SELECT * FROM music";
$result = $conn->query($sql);

// Display records in a table
echo "<table>";
echo "<tr><th>ID</th><th>Artist</th><th>Title</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["artist"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td><a href='update.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
